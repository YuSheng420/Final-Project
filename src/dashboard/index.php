<?php
include 'component/dbfun.php';
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

<body>
<?php include 'component/header.php';?>
<div class="content">
<br><br><br><br>
<div class="container fluid">
    <div id="carouselExampleCaptions" class="carousel slide" style="height: 500px;" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="fp/banner.jpg" style="height: 500px;" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <!-- <div class="carousel-item">
        <img src="fp/main.jpg" style="height: 500px;" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div> -->
      <!-- <div class="carousel-item">
        <img src="fp/大船/387120463_10220239428890806_7036265817091873135_n.jpg" style="height: 500px;" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <br><br>
    <div class="container my-4">
      <div class="row g-3 text-center">
        <div class="col-12 col-md-6 col-lg-3">
          <button class="btn btn-secondary w-100" style="background-color: #EF9C9C; padding: 20px;">About Us</button>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <button class="btn btn-secondary w-100" style="background-color: #88B9E6; padding: 20px;" onclick="window.location.href='src/category/index.php'">Category</button>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <button class="btn btn-secondary w-100" style="background-color: #8DDF8C; padding: 20px;"  onclick="window.location.href='src/contact/index.php'">Contact Us</button>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <button class="btn btn-secondary w-100" style="background-color: #E6DA70; padding: 20px;" onclick="window.location.href='src/productlist/'">Product List</button>
        </div>
      </div>
    </div>
    <div class="about" style="text-align: center;margin: 50px 0px 50px 0px;">
    <button class="btn btn-secondary w-50" style="background-color: #EF9C9C; padding: 20px;font-size: 30px;">About Us</button>
    <br>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit magnam saepe? Impedit vitae qui temporibus dolorem incidunt, pariatur iure dignissimos ducimus sapiente assumenda rem veniam eveniet praesentium porro eligendi placeat officia ut illum modi fuga. Autem quae numquam amet laborum cupiditate, debitis, velit molestias perspiciatis quis, eaque nihil! Quos deleniti fugiat fuga nobis dolores delectus atque vitae hic illum modi ea officiis, explicabo error facilis. Mollitia enim iste earum.</p>
  </div>
  <br>
  <div>
    <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 " style="text-align: center;">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Founder </h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4"  style="text-align: center;">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>CEO</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4"  style="text-align: center;">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Worker</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  <br><br>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <h2>Popular Product</h2>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Test Product 1 </h2>
        <label for="" class="h4 text-muted">Description</label>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum sunt voluptas voluptatem quaerat odit distinctio, maxime omnis dignissimos vel, est possimus sint dolor minus asperiores esse? Ea non omnis nam..</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Test Product 2</h2>
        <label for="" class="h4 text-muted">Description</label>
        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint odit veniam delectus consequatur nisi, deleniti obcaecati explicabo quo quod nesciunt dolorum illum debitis cum! Nobis numquam est distinctio temporibus nostrum!</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Test Product 3</h2>
        <label for="" class="h4 text-muted">Description</label>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    <br>
  </div>
  </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
</html>
<?php include 'component/footer.php'; ?>