<?php
  if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);

    // name, variable, time
    // time set to 1 Hour
    setcookie('username', $username, time()+3600);

    header('Location: page2.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Cookies</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
