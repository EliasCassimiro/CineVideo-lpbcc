<?php 
session_start();
 if (!isset($_SESSION['user'])) 
 	Header("Location: ./login.html");

  echo "almir " . md5("123");
  echo "<br/><br/>"; 
  echo "elias " . md5("elias");
  echo "<br/><br/>";
  echo "otavio " . md5("otavio");
  echo "<br/><br/>";

?>
