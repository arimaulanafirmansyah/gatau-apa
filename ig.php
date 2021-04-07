<?php
function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$ip = $_SERVER['REMOTE_ADDR'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index">Tools Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contact
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://wa.me/6285157792618">Whatsapp</a></li>
            <li><a class="dropdown-item" href="https://www.facebook.com/ari.m.firmansyah.35/">Facebook</a></li>
            <li><a class="dropdown-item" href="https://www.instagram.com/arimaulanafrmnsyh_">Instagram</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Media 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="yt">Youtube To MP3</a></li>
            <li><a class="dropdown-item" href="#">Instagram Downloader</a></li>
            <li><a class="dropdown-item" href="#">Facebook Downloader</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Instagram Downloader</h1>
  </div>
</div>
 <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="alert alert-warning alert-dismissible fade show my-alert" role="alert">
              <strong>Result : </strong> <span id="result"></span>
            </div>
              <div class="mb-3">
                <label for="Name" class="form-label">URL</label>
<div class="popup-confirm">
<input type="text" id="ig" class="form-control" autocomplete="off">
</div>
<div class="errorMsg"></div>
<br>
<button type="button" class="btn btn-primary" onmousedown="buka.play()" onclick="checkId();">Submit</button>
</div>
</div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</script>
<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/ig.js"></script>
<script src="js/fieldset.js"></script>
<script src="js/click.js"></script>
  </body>
</html>

</body>
</html>