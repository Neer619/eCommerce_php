<?php

require 'header.comp.php';
require 'includes/dbh.inc.php';

?>
<link rel="stylesheet" href="css/index.css">
 <title>Document</title>
</head>
<body>
<?php include_once 'navbar.comp.php' ?>

<?php

    $sql = "SELECT * FROM cart";

    $result = mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result))
    {
        echo"
        
        <div class='container card mb-3' style='max-width: 640px;'>
            <div class='row no-gutters'>
                <div class='col-md-4 pl-auto'>
                <img src='".$row['photo']."' class='card-img ' alt='...' style='height:150px; width:auto; padding-left:35px'>
                </div>
                <div class='col-md-8'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row['product_name']."</h5>
                    <p class='card-text'>".$row['product_price']." </p>
             
                </div>
                </div>
            </div>
        </div>

        
        ";


    }

    

?>


</body>
</html>
