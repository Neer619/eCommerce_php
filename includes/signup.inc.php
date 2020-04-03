<?php

require "dbh.inc.php";

$first=mysqli_real_escape_string($conn,$_POST['first']);
$last=mysqli_real_escape_string($conn,$_POST['last']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
$repwd=mysqli_real_escape_string($conn,$_POST['repwd']);


// echo $first;
// exit();

if(empty($first) || empty($last)|| empty($email)|| empty($uname)|| empty($pwd)|| empty($repwd) )
{
  
    header("Location: ../index.php?status=fieldempty&first=$first&last=$last&email=$email&uname=$uname");
    exit();
}
else if(!preg_match('/^[a-zA-Z ]*$/',$first) || !preg_match('/^[a-zA-Z ]*$/',$last))
{
    header("Location: ../index.php?status=wrongname&first=$first&last=$last&email=$email&uname=$uname");
    exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    header("Location: ../index.php?status=emailerror&first=$first&last=$last&email=$email&uname=$uname");
    exit();
}
else if($pwd!=$repwd)
{
    header("Location: ../index.php?status=passworderror&first=$first&last=$last&email=$email&uname=$uname");
    exit();
}

//also check for duplicate username



$sql="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd ) VALUES (?,?,?,?,?);  ";

$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql))
{
    header("Location: ../index.php?status=sqlerror&first=$first&last=$last&email=$email&uname=$uname");
    exit();
}
else{
    mysqli_stmt_bind_param($stmt,"sssss",$first,$last,$email,$uname,$pwd);
    mysqli_execute($stmt);
    header("Location: ../index.php?status=success");
    exit();

}




