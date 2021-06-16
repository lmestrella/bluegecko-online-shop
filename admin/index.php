<?php

if($_SESSION["adminUid"])
  header("location: ./products.php");
else
  header("location: ./login.php");