<?php

session_start();
// remove session username so it reverts to sign out mode
unset($_SESSION['username']);

header("Location: sign-in.php");
die(); 
