<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin.page.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="includes/admin_logout.inc.php" method="post">
<button type="submit" name="logout">Logout </button>
</form>

<form action="insertPage.php" method="post">
<select name="option" id="">
<option value="mobile">Mobile</option>
<option value="laptop">Laptops</option>
<option value="camera">Camera</option>
<option value="speaker">Speaker and Headphones</option>
<option value="watch">Watches</option>
</select>
<button type="submit" name="insert">Insert </button>
</form>





</body>
</html>