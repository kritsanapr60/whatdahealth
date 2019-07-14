<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product  </title>

    <meta name="title" content="Best What da Health">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png"/>
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
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
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
    font-family: 'Acme', sans-serif;
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
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fab fa-product-hunt"></i> Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-id-card-alt"></i> Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-link"></i> Links</a>
      </li> -->
      <li>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-aling:center;">Menu &nbsp; &times; </a>
          <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
          <a href="product.php"><i class="fab fa-product-hunt"></i>&nbsp; Product</a>
          <a href="content.php"><i class="fas fa-id-card-alt"></i>&nbsp; Content</a>
          <a href="links.php"><i class="fas fa-link"></i>&nbsp; Links</a>
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
      </li>
    </ul>

      <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="d-block" style="max-width: auto; height: auto; display: block;">&#9776; </span>   
    
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
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
<div class="col-md-12">
    <div class="alert alert-success center">
        <h1> คำนวณค่า BMI </h1>
        <h2>ค่าดัชนีมวลกาย Body Mass Index </h2>
    </div>
    <form action="/action_page.php">
        น้ำหนัก: <input type="text" name="weight"><br>
        ส่วนสูง: <input type="text" name="height"><br>
        <input type="submit" value="Submit">
    </form>
        
    <div class="alert alert-success center">
        <h1 name= "showBMI"> BMIของคุณ = ... </h1>
        <p>
        18.5 – 22.99 : ปกติ <br>
        23.0 – 24.99 : น้ำหนักเกิน<br>
        25.0 – 29.99 : อ้วน ระดับ 1 <br>
        30.0 – 34.99 : อ้วน ระดับ 2 <br>
        > 35.0 : Morbid obesity อ้วน ระดับ 3, อ้วนขั้นรุนแรง
        </p>
    </div>
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