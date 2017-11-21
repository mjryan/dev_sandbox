<?php
  $user = ['name' => 'Mike', 'email' => 'test@test.com', 'age' => 50];

  $user = serialize($user);

  // name, variable, time
  // time set to 1 Day
  setcookie('user', $user, time() + (86400 * 30));

  $user = unserialize($_COOKIE['user']);

  print_r($user);
?>
