<?php

session_start();
// remove session username so it reverts to sign out mode
unset($_SESSION['username']);
unset($_SESSION['id']);

header("Location: sign-in.php");
die(); 
