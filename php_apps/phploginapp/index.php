<?php
  // Include db config
  require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <title>Dashboard</title>
</head>
<body class="bg-primary">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2>Dashboard <small class="text-muted">brad@gmail.com</small></h2>
          <p>Welcome to the dashboard Brad</p>
          <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
