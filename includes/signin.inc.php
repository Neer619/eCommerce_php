<?php

require "dbh.inc.php";

$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

// echo $uname."<br>" ;
// echo $pwd."<br>" ;

$sql="SELECT user_uid,user_pwd FROM users WHERE user_uid=? ";

$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql))
{
    header("Location: ../index.php?login=sqlerror");
    exit();
}
else{
    mysqli_stmt_bind_param($stmt,"s",$uname);
    mysqli_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    // print_r($result);
    if($result->num_rows==0)
    {
        header("Location: ../index.php?login=userdontexist");
        exit();
    }
    else{
        $details=mysqli_fetch_assoc($result);
 
        if($pwd==$details['user_pwd'])
        {
            session_start();
            $_SESSION['name']=$uname;
            header("Location: ../index.php?login=success");
            exit();
        }
        else{
            header("Location: ../index.php?login=pwderr");
            exit();
        }
    }


}
