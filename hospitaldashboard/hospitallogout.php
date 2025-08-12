<?php

session_start();
session_destroy();
header("Location: ../home.php"); // goes up one folder and opens home.php
exit;

?>