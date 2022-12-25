<?php 
session_start();
session_destroy();

Header("Location: ../Html/anasayfa.php");
exit;
?>