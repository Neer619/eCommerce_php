<?php
session_start();
?>

<div class="nav1">
    <nav class="navbar">
      <a class="navbar-brand text-light" href="index.php">e-Kart</a>
      <!-- <form class="form-inline mr-0">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" id="search">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit" name="search">Search</button>
      </form> -->
      <?php 
        if(!isset($_SESSION['name']))
        {
          echo "
          <button class='btn btn-outline-success my-2 my-sm-0 ml-3' type='button' name='login' data-toggle='modal' data-target='#exampleModalScrollable'>Login</button>
          ";
        }
        else{

          echo 
          "
          <a class='btn btn-warning' href='cart.page.php' role='button'>Cart</a>
          <form action='includes/signout.inc.php' method='post'>
          <button class='btn btn-outline-success' type='submit' name='logout' data-toggle='modal' data-target='#exampleModalScrollable'>Logout</button>
          </form>
          
          

          ";


        }
        ?>
       
    </nav>

</div>



<div class="nav2">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  
  <div class="collapse navbar-collapse" >

  <ul class="navbar-nav container ">
      <li class="nav-item">
        <a class="nav-link" href="mobile.page.php">Mobile </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="laptop.page.php">Laptop </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="camera.page.php">Camera </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="speaker.page.php">Speaker </a>
      </li>
     

    </ul>
  </div>
</nav>
</div>