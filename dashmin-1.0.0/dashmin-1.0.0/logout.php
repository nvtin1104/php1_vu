<?php
// Start session
session_start();
session_destroy();
header("Location: signin.php");
exit();
?>
