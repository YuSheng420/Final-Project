<?php
include '../../component/dbfun.php';
$class = new event();

if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "cart") {
    $id = $_GET['id'];
    $name = $_SESSION["id"];
    $check = $class->checkcart($name, $id); // Pass the correct order: user ID first, then product ID
    
    if ($check === 0) { // If the item is not in the cart, add it
        $qry = $class->cart($name, $id);
        echo "<script>window.location.href='/Final-Project/src/cart/index.php'</script>";
    } else { // If the item is already in the cart, alert and redirect
        echo "<script>alert('Already in cart');window.location.href='/Final-Project/src/cart/index.php'</script>";
    }
}
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
        <h1 class="fw-light">Product List</h1>
        <p class="lead text-muted">This page include all of our product ,if i want to easy navigate to the product you want , click the category button</p>
        <p>
          <a href="#" class="btn btn-primary my-2" onclick="window.location.href='/Final-Project/index.php'">Back</a>
          <a href="#" class="btn btn-secondary my-2" onclick="window.location.href='/Final-Project/src/category'">Category</a>
        </p>
      </div>
    </div>
  </section>

<div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php
    
    if (isset($_GET["id"]) && $_GET["id"] !== "") {
        $qry = $class->db_qry("SELECT * FROM product WHERE p_category = ".$_GET["id"]."");
        while($row = mysqli_fetch_array($qry)){ ?>
        <div class="col">
            <div class="card shadow-sm">
            <img src="<?=$row["p_image"]?>" class="img-fluid" alt="">
                
                <div class="card-body">
                    <br>
                    <h2><?=$row["p_name"]?></h2>
                    <p class="card-text"><?=$row["p_description"]?></p>
                    <h3 style="color: red;">RM <?=$row["p_price"]?></h3>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/Final-Project/src/productlist/index.php?id=<?=$row['p_id']?>&action=cart'">Cart</button>
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                            <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    }else{
        $qry = $class->table("product");
        while($row = mysqli_fetch_array($qry)){
    ?>   
        <div class="col">
            <div class="card shadow-sm">
            <img src="<?=$row["p_image"]?>" class="img-fluid" alt="">
                
                <div class="card-body">
                    <br>
                    <h2><?=$row["p_name"]?></h2>
                    <p class="card-text"><?=$row["p_description"]?></p>
                    <h3 style="color: red;">RM <?=$row["p_price"]?></h3>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/Final-Project/src/productlist/index.php?id=<?=$row['p_id']?>&action=cart'">Cart</button>
                            <!-- onclick="window.location.href='/Final-Project/src/cart/index.php?id=<?=$row['p_id']?>'" -->
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                            <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                </div>
            </div>
        </div>
        <?php }}?>
    </div>
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