<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../scss/style.css">
  <script src="../js/login.js" defer></script>
  <title>Admin Login</title>
</head>
<body class="admin-login flex">
  <main class="admin-login__main flex flex-dir-col flex-ai-c">
    <h1 class="admin-login__logo">
      <span>BLUE</span><span>GECKO</span>
    </h1>
    <h3 class="admin-login__title"><span>Admin</span> Login</h3>
    <form action="" method="POST" class="admin-login__form">
      <input type="text" class="admin-login__field" name="user" placeholder="Username"><br>
      <input type="password" class="admin-login__field" name="pass" placeholder="Password"><br>
      <button class="admin-login__submit btn btn-primary">SUBMIT</button>
    </form>
  </main>
  
  <?php include_once("../footer.php") ?>
</body>
</html>