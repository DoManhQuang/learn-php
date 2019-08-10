<?php
  session_start();
  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
  } else {
    $_SESSION['count']++;
  }

  echo "SESSION_F5 : " . $_SESSION['count'];
 

  if (!isset($_COOKIE['count'])) {
  setcookie("count", 0, time() + 3600);
  } else {
      $count = $_COOKIE['count'] + 1;
      setcookie("count", "$count", time() +3600);
  }
   echo "<br>COOKIE_F5 : " . $_COOKIE['count'];
?>