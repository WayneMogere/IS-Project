<?php
session_start();
session_destroy();
header("Location: personnel_login.html");
exit;
?>
