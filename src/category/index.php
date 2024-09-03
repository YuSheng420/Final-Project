<?php
include '../../component/dbfun.php';
$class = new event();


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
        <h1 class="fw-light">Category</h1>
        <p class="lead text-muted">In this page is to our customer to easily checkout our product</p>
        <p>
          <a href="#" class="btn btn-primary my-2" onclick="window.location.href='/Final-Project/index.php'">Back</a>
          <a href="#" class="btn btn-secondary my-2" onclick="window.location.href='/Final-Project/src/productlist/index.php'">All Product</a>
        </p>
      </div>
    </div>
  </section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3 p-3">
    <?php 
      $qry = $class->table("category");
      while($row = mysqli_fetch_array($qry)){
    ?>      
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                  <br><br>
                  <h2><?=$row['c_name']?></h2>
                   
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/Final-Project/src/productlist/index.php?id=<?=$row['c_id']?>'">Check</button>
                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>        
    </div>
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