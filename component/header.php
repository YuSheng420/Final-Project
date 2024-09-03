<?php
$class = new event();

?>
<script type="text/javascript">
  function help(){
    alert('Cant help lol');
  }
</script>
<head>
<link href="/Final-Project/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Final-Project/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/Final-Project/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/Final-Project/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/Final-Project/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/Final-Project/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/Final-Project/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="/Final-Project/assets/css/style.css" rel="stylesheet">
</head>
<header >
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light"style="box-shadow: 0px 0px 8px grey;">
    <div class="container-fluid" >
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
      <img src="/Final-Project/fp/logo.jpg" class="" height="70px" width="70px" style="margin-right: 10px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Final-Project/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Final-Project/src/productlist">Product List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Custom Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Final-Project/src/contact">Contact Us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>

      </div>
      
      <nav class="header-nav ms-auto">
        
      <ul class="d-flex align-items-center">
        <?php
         if (!isset($_SESSION["id"]) || strlen($_SESSION["id"]) == 0) {
          
        ?>
        <a href="/Final-Project/src/login" style="color: black;">Login/Register</a>
        <?php }else{ 
          $qry = $class->db_qry("SELECT * FROM user WHERE id = ".$_SESSION["id"]."");
          while ($row = mysqli_fetch_array($qry)) {          
        ?>
        <li class="nav-item dropdown pe-3 d-block">         
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="/Final-Project/assets/img/pfp.png" class="rounded-circle m-2"> -->
            <!-- <?=$row['name']?> -->
             My Profile
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  profile" style="margin-top: 40px;">
            <li class="dropdown-header">
              <i class="bi bi-person" style="font-size: 20px;"></i>
              <h6><?=$row['name']?></h6>
              <span><?=$row['email']?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/Final-Project/src/cart">
                
                <i class="ri-shopping-cart-line"></i>
                <span> My Cart</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="acc.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" onclick="help()">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/Final-Project/component/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>          
          </ul>
        </li>
        <?php }}?>
      </ul>
    </nav>
    </div>
  </nav>
</header>
<br><br><br>