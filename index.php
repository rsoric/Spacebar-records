<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Štrafasti risevi - Robert Sorić, David Hodak, Damir Stipančić">
  <meta name="generator" content="Hugo 0.88.1">
  <title>SPACEBAR</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/rotateImage.js"></script>

  <style>
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


  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center">

  <div class="cover-container d-flex w-100 h-100 p-4 mx-auto flex-column">
    <header class="mb-auto">
      <!--<div>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Releases</a>
        <a class="nav-link" href="#">Login</a>
      </nav>
    </div>-->
    </header>

    <main class="px-3">
      <h1 style="display:none;">SPACEBAR Records</h1>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <img src="img/spacebar_logo.png" class="img-fluid">
        </div>
      </div>
      <div class="row home-menu justify-content-between">
        <div class="col-sm home-menu-item">
          <a href="about.php">
            <div class="menu-icon-wrapper" id="icon-about-wrapper" onmouseover="rotateYDIV('icon-about-wrapper')">
              <img src="img/icon-about.png" class="menu-icon img-fluid" id="icon-about">
            </div>
            <h3>About</h3>
          </a>
        </div>

        <div class="col-sm home-menu-item">
          <a href="releases.php">
            <div class="menu-icon-wrapper" id="icon-releases-wrapper" onmouseover="rotateYDIV('icon-releases-wrapper')">
              <img src="img/icon-releases.png" class="menu-icon img-fluid" id="icon-reelases">
            </div>
            <h3>Releases</h3>
          </a>
        </div>

        <div class="col home-menu-item">
          <a href="login.php">
            <div class="menu-icon-wrapper" id="icon-login-wrapper" onmouseover="rotateYDIV('icon-login-wrapper')">
              <img src="img/icon-login.png" class="menu-icon img-fluid" id="icon-login">
            </div>
            <h3>Login</h3>
          </a>
        </div>


      </div>
    </main>

    <footer class="mt-auto">
      <p>&copy; Copyright 2021, Štrafasti Ris Web Development Agency</p>
    </footer>
  </div>



</body>

</html>