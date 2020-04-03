<?php

require 'header.comp.php';
require 'includes/dbh.inc.php';

?>
<link rel="stylesheet" href="css/index.css">
 <title>Document</title>
</head>
<body >
<?php include_once 'navbar.comp.php' ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner myCarousel">
    <div class="carousel-item active">
      <img src="images/spk_01.jfif" class="d-block w-100" alt="...">
    </div>
   
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid">
<div class="row">
    
    <div class="container col-10">
        <div class="containter-fluid">
            <div class="row">

            <?php
            
            $sql ="SELECT * FROM speaker";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $prod_name=$row['brand']." ".$row['model_name'];
                    $price=$row['price'];
                    echo"
                    <div class='card m-2 ' style='width: 18rem;' href='#'>
                    <div class='container text-center'>
                    <img src='".$row['photo']."' class='card-img-top' alt='image.jpg' style='height:200px; width:auto;  '>
                    </div>
                    
                    <div class='card-body pb-0'>
                        <h5 class='card-title'>".$prod_name."</h5>

                        <h5 class='card-title' >".$price."</h5>
                        <a href='product-details.page.php?product=mobile&details=".base64_encode(serialize($row))."' class='stretched-link'></a>
                    </div>
                    </div>
                    ";
                }
            }
            else{
                echo "No data found";
            }
            
            ?>

            </div>
            
            
        </div>
    </div>
</div>

</div>


<?php
include_once 'footer.comp.php';

?>

</body>

</html>
