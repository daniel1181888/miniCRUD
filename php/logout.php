<?php
session_start();

unset($_SESSION);

SESSION_destroy();

header('location: ../login.php')
?>