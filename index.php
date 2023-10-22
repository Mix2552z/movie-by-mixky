<?php
 include('config.php');
 $num_rows = mysqli_num_rows(mysqli_query($con,"SELECT * FROM vdo"));
 $limit_page = 8;
 $page = $_GET['Page'];

 $num_page = $num_rows/$limit_page;
 $limit_start = ($page*$limit_page)-$limit_page
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>MOVIEXD | ดูหนังออนไลน์ ครบจบที่นี้ที่เดียว!</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <style>
        body {
            background-color: #7cd0da;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">รายระเอียดแนะนำ</h4>
          <p class="text-muted">ดูหนังออนไลน์ที่นี้ มีหนัง แอคชัน, สงครามโลก, หนังไทยยุค90, หนังเก่าๆ และอื่นๆอีกมากมาย</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <h5 class="text-white">ติดต่อลงโฆษณาเว็ปพนัน</h5>
            <li><a href="#" class="text-white">Line</a></li>
        </div>
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
          </div>
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center">
        <strong>MOVIEXD</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<br>
<hr>
<center>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media0.giphy.com/media/4wNlsMDPyL0m42hr0X/giphy.gif" width="90%" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>John Wick: Chapter 4 </h5>
        <p>ยิงมันเต็มระบบ</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media0.giphy.com/media/4wNlsMDPyL0m42hr0X/giphy.gif" width="90%" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>John Wick: Chapter 4 </h5>
        <p>ยิงมันเต็มระบบ</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media0.giphy.com/media/4wNlsMDPyL0m42hr0X/giphy.gif" width="90%" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>John Wick: Chapter 4 </h5>
        <p>ยิงมันเต็มระบบ</p>
      </div>
    </div>
    
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
</center>
<hr>
<main>
  <div class="album py-5 bg-primary">
    <div class="container">
    <div class="row">
        <?php 
        $query = mysqli_query($con, "SELECT * FROM vdo ORDER BY id DESC LIMIT $limit_start,$limit_page");
        while($result = mysqli_fetch_array($query)){
        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="./play.php?id=<?=$result['id']?>">
            <img  width="100%" height="380" src="<?=$result['img']?>" alt="">
            </a>
            <div class="card-body">
              <h4 class="card-text text-center center"><?=$result['name']?></h4>
          </div>
        </div>
        </div>
        <?php
        }
        ?>
      </div>
      <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
<?php
for($i=1;$i<=$num_page;$i++){
  if()
?>
<li class="page-item"><a class="page-link" href="#"><?=$i?></a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
<?php
}
?>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

    

    </div>
  </div>
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="index.php">กลับมาหน้าแรก</a>
    </p>
    <p class="mb-1">ดูหนังออนไลน์ครบจบที่นี้ที่เดียว MOVIEXD</p>
  </div>
</footer>
  </body>
</html>
