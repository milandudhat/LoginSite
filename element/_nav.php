<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
    <div class="container-fluid">
      <a class="navbar-brand" href="/login/index.php">Code-liner</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Web devlopment Services</a></li>
              <li><a class="dropdown-item" href="#">Web design Services</a></li>
              <li><a class="dropdown-item" href="#">Graphics design Services</a></li>
              <li><a class="dropdown-item" href="#">Mobile App Services</a></li>
              <li><a class="dropdown-item" href="#">Digital marketing Services</a></li>
              <li><a class="dropdown-item" href="#">SEO Services</a></li>
              <!-- <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Career</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contect us</a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li> -->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2 small " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
        <div class="mx-1">
          <!-- <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#login"
            type="submit">Login</button>
          <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#singup"
            type="submit" href="/login/signup.php">Singup</button> -->';
            if($loggedin){
              echo '<a class="btn btn-outline-danger" href="/login/logout.php" role="button">Logout</a>';
            }
            if(!$loggedin){
              echo '
            <a class="btn btn-outline-danger" href="/login/login.php" role="button">Login</a>
            <a class="btn btn-outline-danger" href="/login/signup.php" role="button">Singup</a>';
            }
        echo '
        </div>
      </div>
    </div>
  </nav>';
?>