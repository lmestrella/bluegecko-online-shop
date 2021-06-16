<?php
  session_start();
  if (isset($_SESSION['adminUid'])) header("location: ./products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/scss/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="../assets/js/login.js" defer></script>
  <title>Admin Login</title>
</head>
<body class="admin-login flex">
  <main class="admin-login__main flex flex-dir-col flex-ai-c">
    <h1 class="site__logo">
      <span>BLUE</span><span>GECKO</span>
    </h1>
    <h3 class="admin-login__title"><span>Admin</span> Login</h3>
    <form action="./includes/login.inc.php" method="POST" class="admin-login__form">
      <input type="text" class="admin-login__field" name="user" placeholder="Username"><br>
      <input type="password" class="admin-login__field" name="pwd" placeholder="Password"><br>
      <button class="admin-login__submit btn btn-primary" name="submit">SUBMIT</button>
    </form>
  </main>
  
  <?php include_once("./includes/footer.inc.php") ?>
</body>
</html>