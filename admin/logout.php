<?php
session_start();
unset($_SESSION['loggedUser']);

header("Location: index.php");
?>