var loadCustomCardIcon = function(card_id) {

  defaultStorage.ref('custom_card_icons/'+ uid + '/' + card_id + ".jpg").getDownloadURL().then(function(url) {
    $('#card-id-' + card_id).find('.card-icon > div').css("background-image", 'url(' + url + ')');
  });

};


var loadUserId = function() {

  defaultDatabase.ref("users").orderByChild("username_lowercased").equalTo(username).on('value', function(snapshot) {

      uid = Object.keys(snapshot.val())[0];

      if (uid == null) {
        alert("This user does not exist!");
        window.location.replace("http://flist.me");
        return null;
      }

      loadUserInfo(uid);
      loadUserProfileImage(uid);
      loadUsersGroups();
      loadDefaultCards();


  });

};

var loadUserInfo = function(){

  defaultDatabase.ref('users/' + uid).once('value').then(function(snapshot) {
      var val = snapshot.val();

      $("#profile-username").html(val.username);
      $("#profile-name").html(val.name + " " + val.surname);
      $("#profile-description").html(val.description);
      $("#profile-link").attr("onclick", "CopyToClipboard('"+ url_string +"')");
      $("#report-btn").attr("href", "mailto:help@flist.me?subject=Report%20User%20-%20" + val.username
                                                        + "&body=Suspicious user -> " + val.username);

      if (val.verified) {
        $("#verified-status").show();
      }

  });

};

var loadUserProfileImage = function() {

  defaultStorage.ref('profile_imgs/'+ uid +'.jpg').getDownloadURL().then(function(url) {

    var img = $('#profile-avatar').attr("src", url);

  }).catch(function(error) {
    // Handle any errors
  });


};

var loadUsersGroups = function() {

  defaultDatabase.ref('groups/' + uid).once('value').then(function(snapshot) {

    if (snapshot.numChildren() > 0) {
      isEmpty = false;
    }

    snapshot.forEach(function(childSnapshot) {

      var childData = childSnapshot.val();

      var template = $("#category-tmp").html();
      var html = Mustache.render(template, {title: childData.name, category_id: "category-id-" + childSnapshot.key});

      $("#categories").append(html);

    });

  });

};

var loadDefaultCards = function() {

  defaultDatabase.ref('card-types').once('value').then(function(snapshot) {

    snapshot.forEach(function(childSnapshot) {

      var childData = childSnapshot.val();

      services.push({"shortcut": childSnapshot.key,  "img": "img/socials/" + childData.icon, "link": childData.link });

      if (services.length == snapshot.numChildren()) {
        loadUsersCards();
      }

    });

  });

};

var loadUsersCards = function() {

    defaultDatabase.ref('cards/'+ uid).once('value').then(function(snapshot) {

      if (snapshot.numChildren() > 0) {
        isEmpty = false;
      }

      snapshot.forEach(function(childSnapshot) {

        var childData = childSnapshot.val();

        var ser;

        services.forEach(function(child) {
          if (child["shortcut"] == childData.type) {
            ser = child;
          }

        });

        if (ser == null) { ser = services[0]; }

        if (ser["shortcut"] == "none") {
          loadCustomCardIcon(childSnapshot.key);
        }

        var data = {

          card_name: childData.name,
          card_username: childData.username,
          card_description: childData.description,
          card_link: childData.url,
          card_icon: ser["img"],
          card_id: "card-id-" + childSnapshot.key

        };

        var category_id = childData.group_id;

        var template = $("#card-tmp").html();
        var html = Mustache.render(template, data);
        var $selectors;

        if ( $("#category-id-" + category_id).length ) {

          $selectors = $(html).appendTo("#category-id-" + category_id);

        } else {

          if ( $("#category-id-0").length == 0) {

            var template = $("#category-tmp").html();
            var cat = Mustache.render(template, {title: "", category_id: "category-id-0"});

            $("#categories").prepend(cat);
            $("#category-id-0").css("display", "");


          }

          $selectors = $(html).appendTo("#category-id-0");

        }

        $selectors.find('[data-toggle="popover"]').popover();

      });

      if (isEmpty == true)
        $("#empty-data-holder").css("display", "block");

    });

};


var defaultStorage = firebase.storage();
var defaultDatabase = firebase.database();

var url_string = window.location.href;
var url = new URL(url_string);

var username = url.searchParams.get("n");

if (username == null) {
  username = window.location.pathname.split('/').slice(1)[1].toLowerCase();
}

var uid = null;

var isEmpty = true;
var services = [];

loadUserId();
