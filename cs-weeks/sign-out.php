<?php

session_start();
unset($_SESSION['username']);

header("Location: sign-in.php");
die(); // we always include a die after redirects.
