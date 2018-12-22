<!DOCTYPE html>
<html>
  <head>
    <title>Flist - Profile</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.min.css">


  </head>
  <body>

    <?php require "profile.php"; ?>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>

    <!-- Font Icon -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Mustache (Replace markers) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>

    <!-- Custom -->

    <!-- Templates -->
    <?php
          require_once "views/category-tmp.html";

          require_once "views/card-tmp-short.html";
    ?>

    <!-- Main -->
    <script src="js/ui-features.js"></script>

    <!-- Firebase Init -->
    <script src="js/firebase-init.js"></script>

    <!-- Firebase Profile -->
    <script src="js/firebase-profile.js"></script>


  </body>
</html>
