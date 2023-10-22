<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM vdo WHERE id = $id");
($result = mysqli_fetch_array($query));
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title><?=$result['name']?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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
<main>
  <div class="album py-5 bg-primary">
    <div class="container">
    <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img  width="100%" height="380" src="<?=$result['img']?>" alt="">
          </div>
        </div>
        <div class="col-md-9">
          <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="380" src="<?=$result['vdo']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
        </div>
      </div>
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
