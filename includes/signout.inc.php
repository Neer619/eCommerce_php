<?php

if(!isset($_POST['logout']))
{
    header("Location: ../index.php");
    exit();
}

session_start();
session_unset();
session_destroy();
header("Location: ../index.php");