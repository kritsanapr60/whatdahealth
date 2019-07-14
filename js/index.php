<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Whatdahealth</title>

    <meta name="title" content="Best What da Health">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png"/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- my css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/navbar-fix-top.css"> -->
    <!-- My Font css -->
    <link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <!-- @import url(http://fonts.googleapis.com/css?family=Tangerine); -->
    <!-- My icon fa -->
    <script src="https://kit.fontawesome.com/98cfa62f7f.js"></script>
    <script src="bootstrap.js"></script>  
    <script src="bootstrap.min.js"></script>  

    
<style>
/* body {
    min-height: 45rem;
    padding-top: 0rem;
}    */
  nav {
      opacity: 0.9;
  }
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  body {
    min-height: 45rem;
    padding-top: 3.9rem;
    font-family: 'Sniglet', cursive;
  }
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>  
</head>
<body>
<!-- Start navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top justify-content-between">
&nbsp; &nbsp; &nbsp; 
<img src="img/icon.png" height="30" width="30" style="text-aling: center">&nbsp; &nbsp; <a class="navbar-brand" href="#" style="font-family: 'Acme', sans-serif; font-size: 25px;"> WHAT DA HEALTH</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span> 
</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-aling:center;">Menu &nbsp; &times; </a>
          <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
          <a href="product.php"><i class="fab fa-product-hunt"></i>&nbsp; Product</a>
          <a href="content.php"><i class="fas fa-id-card-alt"></i>&nbsp; Content</a>
          <a href="links.php"><i class="fas fa-link"></i>&nbsp; Links</a>
          <hr style="border-color: #808080; size: 15; width: 200px;">
          <center><div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Calculator
            </button>
            <div class="dropdown-menu">
              <a  href="BMI.php" style="font-size: 15px; width: 5px;"> BMI <i class="fa fa-line-chart" aria-hidden="true"></i></a>
              <a  href="BMR.php" style="font-size: 15px; width: 5px;"> BMR <i class="fa fa-line-chart" aria-hidden="true"></i></a>
            </div>
          </div>
          </div>
        </div>
      </li>
    </ul>

      <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="d-block" style="max-width: auto; height: auto; display: block;">&#9776; </span>   
  </div>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <!-- <li data-target="#demo" data-slide-to="2"></li> -->
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <!-- <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <!-- <h3>Chicago</h3>
        <p>Thank you, Chicago!</p> -->
      </div>   
    </div>
    <!-- <div class="carousel-item">
      <img src="img/ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>    -->
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- Stop navbar -->
<br>
<div class="row">
<div class="container-fluid">
<div class="col-md-12">
  <div class="alert alert-success center">
      <h1>What da Health</h1>
      <h5><b>สุขภาพที่ดีเริ่มได้ที่ตัวคุณ</b></h5>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;อาหารแทบจะทุกชนิดจะมีน้ำตาลตามธรรมชาติอยู่แล้ว เพื่อให้เราได้รับน้ำตาลในปริมาณที่พอเหมาะ จึงควรควบคุมปริมาณน้ำตาลที่เติมเพิ่มในอาหาร และเครื่องดื่ม และเลือกกินอาหารที่มีน้ำตาลที่พอเหมาะ และหมั่นออกกำลังกายอยู่เสมอ</p>
        <div>
              
        </div>
    </div>
  </div>
</div>
</div>
<!-- Portfolio -->
<section class="content-section" id="portfolio">
<div class="container">
  <div class="content-section-heading text-center">
    <h3 class="text-secondary mb-0">Portfolio</h3>
    <h2 class="mb-5">Recent Projects</h2>
  </div>
  <div class="row no-gutters">
    <div class="col-lg-6">
      <a class="portfolio-item" href="#">
        <span class="caption">
          <span class="caption-content">
            <h2>Stationary</h2>
            <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
          </span>
        </span>
        <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-6">
      <a class="portfolio-item" href="#">
        <span class="caption">
          <span class="caption-content">
            <h2>Ice Cream</h2>
            <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
          </span>
        </span>
        <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-6">
      <a class="portfolio-item" href="#">
        <span class="caption">
          <span class="caption-content">
            <h2>Strawberries</h2>
            <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
          </span>
        </span>
        <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-6">
      <a class="portfolio-item" href="#">
        <span class="caption">
          <span class="caption-content">
            <h2>Workspace</h2>
            <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
          </span>
        </span>
        <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
      </a>
    </div>
  </div>
</div>
</section>
</div>
<hr>
<!-- footer -->
<div class="footer text-center" style="margin: 20px 0 60px 0; ">

    <p>&copy; Begin Programming</p>
    <p> The best What da Health !!. You know ?? </p>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>