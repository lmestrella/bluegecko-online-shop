<?php

include_once "./class-autoloader.inc.php";
// check for active session
// if there's an active session, redirect to products page

if (isset($_POST["submit"])) {
  // header("location: ./products.php");
  // echo $_POST["user"];

  // check login creds
  $login = new Login();
  $adminUser = $login->getAdminUser($_POST["user"]);
  
  if ($adminUser === false) {
    echo "invaliduser";
  } else {
    if (password_verify($_POST["pwd"], $adminUser['admin_password'])) {
      session_start();
      $_SESSION['adminUid'] = $adminUser['admin_uid'];
      echo "correctuser";
    } else {
      echo "wrongpassword";
    }
  }
  

  // echo "login";
}