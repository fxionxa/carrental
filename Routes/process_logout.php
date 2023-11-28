<?php
session_start();

session_destroy();
header('Location: '.$uri.'/carrental/pages/login.php');
exit();
?>