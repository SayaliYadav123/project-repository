<?php
session_start();
// Destroy the session and redirect to homepage
session_unset();
session_destroy();
header("Location: homepage.php");
exit;
?>
