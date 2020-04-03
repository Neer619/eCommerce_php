<?php

if(!isset($_POST['logout']))
{
    header("Location: ../admin_main.php");
    exit();
}

session_start();
session_unset();
session_destroy();
header("Location: ../admin.page.php");