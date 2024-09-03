<?php
include '../../component/dbfun.php';
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
<br><br><br>
<main>
  <div class="pagetitle p-3">
    <section class="section">
      <div class="row">
        <!-- Contact Form Section -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body p-4">
              <h1 class="card-title">Contact Us</h1>
              <form action="home.php" method="post">
                <div class="mb-3 row">
                  <label for="inputText" class="col-sm-3 col-form-label">Your Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputText" name="muser" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail" name="memail" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputN" class="col-sm-3 col-form-label">Phone Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputN" name="mphone" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-floating">
                    <textarea class="form-control" name="mdetail" placeholder="Message" id="floatingTextarea" style="height: 100px;" required></textarea>
                    <label for="floatingTextarea">Message</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="msub">Send</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Contact Information and Map Section -->
        <div class="col-lg-6">
          <div class="p-1">
            <div class="mb-3">
              <a href="https://maps.app.goo.gl/NNuatMps4J5WhQn38" class="d-block mb-2 text-dark" style="font-size: 20px;">
                <i class="fa-solid fa-location-dot"></i> Location
              </a>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3967.350837543443!2d100.3578348!3d6.0833428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b452fb601bde7%3A0x38710135a6838ff!2z5Li95Y2O5rSL5pyN57q45pyt5LyB5Lia!5e0!3m2!1sen!2smy!4v1724384828996!5m2!1sen!2smy" class="w-100 mb-3" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mb-2">
              <label><i class="bx bxl-google"></i> test@gmail.com</label>
            </div>
            <div>
              <label><i class="bx bxs-phone"></i> 012 345 6789</label>
            </div>
          </div>
        </div>
      </div>
    </section>
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