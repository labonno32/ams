<?php
session_start();
unset($_SESSION['loggedUser']);
unset($_SESSION['loggedTeachersName']);

header("Location: index.php");
?>