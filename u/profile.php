
<!-- Menu -->
<!-- <nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
    Flist - Profile Page <sup>Beta</sup>
  </a>

  <a href="/" class="col-6 col-md-auto align-self-md-end btn btn-outline-light" target="_blank">Get <b>Flist</b></a>
</nav> -->

<!-- Alert -->
<!-- <div class="alert alert-warning text-center" role="alert">
  This page is under construction! Feedback inquires regarding the platform can be sent to <a href="mailto:info@flist.me">info@flist.me</a>!
</div> -->

<nav class="navbar bg-primary">

</nav>

<!-- Content -->
<div class="container" style="margin-top: 50px;">

  <!-- Profile Info -->
  <div class="row">

    <!-- Avatar -->
    <div class="col-md-4">
      <img src="img/user.png" id="profile-avatar" class="rounded-circle mx-auto d-block" width="200px" height="200px">
    </div>

    <!-- Body -->
    <div class="profile-body col-md-8 align-self-center">

      <!-- Toolbar -->
      <div class="row">

        <!-- Name & Username -->
        <div class="col-md">
          <h2 style="margin-bottom: 0px;"> <span id="profile-name"></span><img src="img/icons/verified.png" id="verified-status" alt="" width="30px" height="30px" style="margin-left: 15px; position: absolute; top: 5px; display: none;"></h2>
          <p class="text-secondary" id="profile-username">...</p>
        </div>

        <!-- Subs, Share & Edit -->
        <div class="col-md-7 align-self-center">
          <ul class="list-inline align-self-center float-md-right">
            <!-- <li class="list-inline-item border rounded border-secondary text-secondary" style="margin-right: 15px; padding: 6px;">Followers: NA</li>
            <li class="list-inline-item border rounded border-secondary text-secondary" style="margin-right: 30px; padding: 6px;">Following: NA</li> -->

            <li class="list-inline-item">
              <div class="share-dropdown dropdown">

                <button class="dropdown-toggle btn btn-md btn-outline-secondary" name="button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 50px;"><i class="fa fa-share-square"></i></button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" style="color: gray;" id="profile-link" onclick="" href="#">
                    <div class="row">
                      <div class="col-2">
                        <i class="fas fa-copy"></i>
                      </div>
                      <div class="col">
                        Copy
                      </div>
                    </div>
                  </a>
<!--
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" style="color: gray;" href="#">

                    <div class="row">
                      <div class="col-2">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="col">
                        Email
                      </div>

                    </div>
                  </a>

                  <a class="dropdown-item" style="color: gray;" href="#">


                    <div class="row">
                      <div class="col-2">
                        <i class="fab fa-facebook-f"></i>
                      </div>
                      <div class="col">
                        Facebook
                      </div>

                    </div>
                  </a>

                  <a class="dropdown-item" style="color: gray;" href="#">

                    <div class="row">
                      <div class="col-2">
                        <i class="fab fa-twitter"></i>
                      </div>
                      <div class="col">
                        Twitter
                      </div>

                    </div>
                  </a>

                </div>
              </div> -->
            </li>

            <!-- Edit -->
            <!-- <li class="list-inline-item">
                <button class="btn btn-md btn-outline-secondary" type="button"  style="width: 50px;"><i class="fa fa-cog"></i></button>
            </li> -->

          </ul>

        </div>

      </div>

      <!-- Description -->
      <p class="text-justify" style="white-space: pre-wrap;" id="profile-description">...</p>

      <!-- Report Btn -->
      <a class="btn btn-sm btn-outline-danger float-right" id="report-btn" href="mailto:info@flist.me">Report</a>

    </div>

  </div>

  <!-- Divider -->
  <hr style="margin: 15px 0 50px;">

  <div class="text-secondary" id="empty-data-holder">
    <h1>Empty</h1>
    <h3>No groups or cards here!</h3>
  </div>

  <!-- Categories -->
  <div id="categories">


  </div>

  <div class="powered-by">

    <p class="text-primary">
      <i>Powered By <b>Flist</b></i>
    </p>

    <a href="/" class="btn btn-sm btn-outline-primary">
      Sign Up
    </a>

  </div>


</div>
