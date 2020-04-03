<?php

require '../header.comp.php';
require '../includes/dbh.inc.php';

?>
<link rel="stylesheet" href="../css/index.css">
 <title>Document</title>
</head>

<body >
<?php include_once '../navbar.comp.php' ?>




<?php

$details = unserialize(base64_decode($_GET['details']));
// print_r($details);

if($_GET['product']=='mobile')
{
    echo "
    <div class='container card mb-3' style='max-width: 940px;'>
      <div class='row no-gutters'>
        <div class='col-5'>
        <div class='container text-center' >
          <img src='".$details['photo']."' class='card-img' alt='...' style='max-height:400px; width:auto;' >
        </div>
        </div>
        <div class='col-5'>
          <div class='card-body'>
            <h5 class='card-title'>".$details['brand']." ".$details['model_name']."</h5>
            <p class='card-text'>Price: ".$details['price']."</p>
            <p class='card-text'>Model number: ".$details['model_number']."</p>
            <p class='card-text'>RAM: ".$details['ram']."</p>
            <p class='card-text'>OS: ".$details['os']."</p>
            <p class='card-text'>Processor Type: ".$details['processor_type']."</p>
            <p class='card-text'>Processor Core: ".$details['processor_core']."</p>
            <p class='card-text'>Internal Storage: ".$details['internal_storage']."</p>
            <p class='card-text'>Battery: ".$details['battery']."</p>
    
            <button type='button' class='btn btn-warning' onclick='addtoCart()'>Add to Cart</button>
          </div>
        </div>
      </div>
    </div>

  
    ";
}



?>
   
<script>

addtoCart = ()=>
{
 
  alert("<?php
      $photo=$details['photo'];
      $product_name = $details['brand'].' '.$details['model_name'];
      $product_price = $details['price'];
      echo  $product_name;
      echo  $product_price;
   
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
       
      }

      // $sql="SELECT * FROM cart;";

      $sql="INSERT INTO cart (photo,product_name, product_price) VALUES ('$photo','$product_name' , '$product_price  '); ";

      if(mysqli_query($conn,$sql))
      {
        echo "Added";
      }
      else{
        echo "    Error".mysqli_error($conn);
      }



  ?> ");
  

}

</script>

</body>
</html>

