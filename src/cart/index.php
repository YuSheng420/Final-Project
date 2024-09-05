<?php

include '../../component/dbfun.php';
$class = new event();
$name = $_SESSION["id"];
// if (isset($_GET["id"]) && $_GET["action"] == "delete") {
//   $id = $_GET["id"];
//   $name = $_SESSION["id"];
//   $qry = $class->deletecart($name,$id);
// }

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
	  <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
	  <script src="https://kit.fontawesome.com/1eeb591e79.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<?php include '../../component/header.php';?>
<body>
<div class="content">

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Cart</h1>    
        <p>
          <a href="#" class="btn btn-primary my-2" onclick="window.location.href='/Final-Project/index.php'">Back</a>
        </p>
      </div>
    </div>
  </section>

  <div class="container" style="margin: auto;">
    <div class="row">
    <?php
        $qry = $class->db_qry("SELECT * FROM cart as a INNER JOIN product as b ON a.ct_product=b.p_id WHERE ct_userid = $name");
        if (mysqli_num_rows($qry) > 0){
        while($row = mysqli_fetch_array($qry)){ 
    ?>
        <div class="p-3" style="border-bottom: 1px solid grey;margin-bottom: 10px;">
          <div class="row">

            <div class="col-sm-3">
              <img src="<?=$row["p_image"]?>" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="col-sm-6">
              <h2><?=$row["p_name"]?></h2>
              <h3 style="color: red;">RM <?=$row["p_price"]?> </h3>
              <h2>Amount :</h2>
              <input class="form-control w-50" type="number">
              <br>     
            </div>

            <div class="col-sm-3">
              <button type="button" class="btn btn-md btn-outline-secondary">Remove from cart</button>
            </div>
          </div>
        </div>  
        <?php 
					}
        ?>
        <div class="p-2">
          <h2>Total : RM</h2>
          <div>
            <button type="button" min="1" class="btn btn-lg btn-primary">Buy</button>
            <button type="button" min="1" class="btn btn-lg btn-danger">Remove all from cart</button>          
          </div>          
        </div>


        <?php
						}else{
        ?>
        <div style="margin: auto;">
          <h1>No Item in your cart</h1><br>
        </div>
        <?php      
						}
			  ?> 
    </div>
</main>

</div>
<br><br>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
</html>

<?php include '../../component/footer.php'; ?>