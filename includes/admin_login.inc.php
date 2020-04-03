<?php

require "dbh.inc.php";

if(!isset($_POST['login']))
{
    header("Location: ../admin.page.php");
    exit();
}

$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);


// echo $uname;
// echo $pwd;
// exit();

$sql="SELECT admin_name,admin_pwd FROM admin WHERE admin_name=? ";

$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql))
{
    header("Location: ../admin.page.php?login=sqlerror");
    exit();
}
else{
    mysqli_stmt_bind_param($stmt,"s",$uname);
    mysqli_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    // print_r($result);
    if($result->num_rows==0)
    {
        header("Location: ../admin.page.php?login=userdontexist");
        exit();
    }
    else{
        $details=mysqli_fetch_assoc($result);
 
        if($pwd==$details['admin_pwd'])
        {
            session_start();
            $_SESSION['admin']=$uname;
            header("Location: ../admin_main.php");
            exit();
        }
        else{
            header("Location: ../admin.page.php?login=pwderr");
            exit();
        }
    }


}
