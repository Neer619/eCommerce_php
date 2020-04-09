<?php

session_start();

require 'dbh.inc.php';
if( !isset($_POST['submit']) )
{
    echo "not done";
    exit();
}


$device=$_POST['device'];

if($device=='mobile')
{
    $photo=$_FILES['photo'];
    $price=$_POST['price'];
    $brand=$_POST['brand'];
    $model_name=$_POST['model_name'];
    $model_num=$_POST['model_num'];
    $ram=$_POST['ram'];
    $gpu=$_POST['gpu'];
    $os=$_POST['os'];
    $processor_type=$_POST['processor_type'];
    $processor_core=$_POST['processor_core'];
    $internal_storage=$_POST['internal_storage'];
    $battery=$_POST['battery'];

    $fileExt=explode(".",$_FILES['photo']['name']);
    $fileExt=strtolower(end($fileExt));
    
    // $_FILES['photo']['name']=md5($photo['name']).".".$fileExt;

    $photo_location="C:/xampp/htdocs/eComm_php/images/mobile/".md5($photo['name']).".".$fileExt;



    $sql="INSERT INTO mobile (photo,price,brand,model_name,model_number,ram,gpu,os,processor_type,processor_core,internal_storage,battery) VALUES ( '$photo_location','$price', '$brand', '$model_name', '$model_num', '$ram', '$gpu', '$os', '$processor_type', '$processor_core', '$internal_storage', '$battery') ;";

    if(mysqli_query($conn,$sql))
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],$photo_location);

        // header("Location: ../inserPage.php");

        echo "Success";
        exit();
    }
    else{
        echo "Fail".mysqli_error($conn);
    }



}
else if($device=='laptop')
{
    $photo=$_FILES['photo'];
    $price=$_POST['price'];
    $brand=$_POST['brand'];
    $model_name=$_POST['model_name'];
    $model_num=$_POST['model_num'];
    $ram=$_POST['ram'];
    $gpu=$_POST['gpu'];
    $os=$_POST['os'];
    $processor=$_POST['processor'];
    $hdd_space=$_POST['hdd_space'];
    $battery=$_POST['battery'];

    $fileExt=explode(".",$_FILES['photo']['name']);
    $fileExt=strtolower(end($fileExt));
    
    // $_FILES['photo']['name']=md5($photo['name']).".".$fileExt;

    $photo_location="images/laptop/".md5($photo['name']).".".$fileExt;



    $sql="INSERT INTO laptop (photo,price,brand,model_name,model_num,ram,gpu,os,processor,hdd_space,battery) VALUES ( '$photo_location','$price', '$brand', '$model_name', '$model_num', '$ram', '$gpu', '$os', '$processor', '$hdd_space', '$battery') ;";

    if(mysqli_query($conn,$sql))
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],$photo_location);

        // header("Location: ../inserPage.php");

        echo "Success";
        exit();
    }
    else{
        echo "Fail".mysqli_error($conn);
    }



}
else if($device=='camera')
{
    $photo=$_FILES['photo'];
    $price=$_POST['price'];
    $brand=$_POST['brand'];
    $model_name=$_POST['model_name'];
    $model_num=$_POST['model_num'];
    $megapixel=$_POST['megapixel'];
    $sensor_type=$_POST['sensor_type'];
    $type=$_POST['type'];


    $fileExt=explode(".",$_FILES['photo']['name']);
    $fileExt=strtolower(end($fileExt));
    
    // $_FILES['photo']['name']=md5($photo['name']).".".$fileExt;

    $photo_location="images/camera/".md5($photo['name']).".".$fileExt;



    $sql="INSERT INTO camera (photo,price,brand,model_name,model_num,megapixel,sensor_type,type) VALUES ( '$photo_location','$price', '$brand', '$model_name', '$model_num', '$megapixel','$sensor_type','$type') ;";

    if(mysqli_query($conn,$sql))
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],$photo_location);

        // header("Location: ../inserPage.php");

        echo "Success";
        exit();
    }
    else{
        echo "Fail".mysqli_error($conn);
    }



}
else if($device=='speaker')
{
    $photo=$_FILES['photo'];
    $price=$_POST['price'];
    $brand=$_POST['brand'];
    $model_name=$_POST['model_name'];
    $model_num=$_POST['model_num'];
    $type=$_POST['type'];
    $wired=$_POST['wired'];
    

    $fileExt=explode(".",$_FILES['photo']['name']);
    $fileExt=strtolower(end($fileExt));
    
    // $_FILES['photo']['name']=md5($photo['name']).".".$fileExt;

    $photo_location="images/speaker/".md5($photo['name']).".".$fileExt;



    $sql="INSERT INTO speaker (photo,price,brand,model_name,model_number,type,wired) VALUES ( '$photo_location','$price', '$brand', '$model_name', '$model_num', '$type','$wired') ;";

    if(mysqli_query($conn,$sql))
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],$photo_location);

        // header("Location: ../inserPage.php");

        echo "Success";
        exit();
    }
    else{
        echo "Fail".mysqli_error($conn);
    }



}