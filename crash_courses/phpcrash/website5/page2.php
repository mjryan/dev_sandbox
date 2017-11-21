<?php
  // name, variable, time
  // time set to 1 Day
  setcookie('username', 'Frank', time() + (86400 * 30));

  // Delect Cookie
  setcookie('username', 'Frank', time() - 3600);

  if (count($_COOKIE) > 0) {
    echo "There are ".count($_COOKIE). ' cookies saved<br>';
  } else {
    echo "Thre are no cookies saved<br>";
  }

  if (isset($_COOKIE['username'])) {
    echo 'User '. $_COOKIE['username'] . ' is set<br>';
  } else {
    echo 'User is not set';
  }
?>
