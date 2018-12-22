function ToggleCategory(category_id) {
  $("#" + category_id).slideToggle('slow');
}

function CopyLink(card_id) {

  var link = $("#" + card_id + " .link");
  var text = link.attr("href");

  var dummy = document.createElement("input");
  document.body.appendChild(dummy);
  dummy.setAttribute('value', text);
  dummy.select();
  document.execCommand("copy");
  document.body.removeChild(dummy);

  /* Alert the copied text */
  alert("Copied: " + text);

}
