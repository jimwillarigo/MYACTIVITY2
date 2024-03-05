<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



        <title>IAS - Activity 2</title>



</head> 
<body>
<style>
  .container {
  text-align:center;
}
   body{
    background-image: url('maxresdefault.jpg');
    height: 100vh;
    background-size:cover;
    background-position: center;
    color: black;
  }
    .p1 {
      font-family: "Times New Roman", Times, Serif;
    }
  </style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="\home" style="font-size:30px">IAS 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="\home" style="font-size: 20px">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contact" style="font-size: 20px">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/service" style="font-size: 20px">SERVICE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px" >
           MENU
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/coffee">COFFEE</a></li>
            <li><a class="dropdown-item" href="/non-coffee">NON-COFFEE</a></li>
            <li><a class="dropdown-item" href="/desserts">DESSERTS</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about" style="font-size: 20px">ABOUT</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="font-size: 20px">Search</button>
      </form>
    </div>
  </div>
</nav>
   
<div class="container">
  <h1 style="font-size:50px">Welcome to Homepage</h1>
  <h1 style="font-size:30px">I am Jimwil</h1>
  <a class="w3-text-black w3-display-middle w3-center"></a>
</div>


</body>
</html>