<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

        <title>IAS - Activity 2</title>

</head> 
<body>
<style>
  .center {
      text-align:center;
      padding: 300px 0;
  }
  .p1 {
      font-family: "Times New Roman", Times, Serif;
  }
  body{
      background-image: url('background-drink-coffee-design-illustration-free-vector.jpg');
      height: 60vh;
      background-size:"width:100%";
      background-position: center;
      color: white;
  }
  .logo img{
      float: left;
      width: 100px;
  }
  body{font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
      font-family: "Playfair Display";
      letter-spacing: 5px;
  }
  .about{
    text-align:center;
    justify: justify;
    padding-top: 200px 0;
  }
  .menu{
    background-color: white;
    background-position: cover;
  }
  .about-section{
    background-image: url('onepage_restaurant.jpg');
    height: 150%;
    background-size:"width:100%";
    background-position: center;
  }
  .col{
    background-size: "height:50% , width:50%";
  }
 
    
    </style>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="main">
      <div class="logo">
        <img src="1.png">
      </div>
    </div>
      <a class="navbar-brand" href="\home"></a>
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
            <a class="nav-link active" href="/about" style="font-size: 20px">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" class="nav-link active" href="/menu" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px" >
            MENU
            </a>
            
            <!-- NAVBAR -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/coffee">COFFEE</a></li>
              <li><a class="dropdown-item" href="/non-coffee">NON-COFFEE</a></li>
              <li><a class="dropdown-item" href="/desserts">DESSERTS</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" style="font-size: 20px">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="center">
        <h1 class="p1" style="font-size:100px">Welcome to Contact</h1>
        <h1 class="p1" style="font-size:50px">I am Jimwil</h1>  
  </div>


<!-- MENU -->
<div class="menu">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100%">
      <img src="coffee.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="dropdown-item" href="/coffee">COFFEE</h5>
        <p class="card-text">"Coffee is a language in itself." - Jackie Chan</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100%">
      <img src="coffee.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="dropdown-item" href="/non-coffee">NON-COFFEE</h5>
        <p class="card-text">"The only way to do great work is to love what you do." - Steve Jobs</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100%">
      <img src="coffee.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="dropdown-item" href="/desserts">DESSERTS</h5>
        <p class="card-text">"Dessert is like a feel-good song, and the best ones make you dance." - Edward Lee</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="center" id="about">
    <div class="col m6">
     <img src="onepage_restaurant.jpg" class="round wimage opacity-min" alt="Table Setting" width="100%" height="150%">
    </div>

    <div class="col m6 large">
      <h1 class="center , text-black" style="font-size:50px";>About Catering</h1><br>
      <h5 class="text-black , padding-top-200px 0" style="font-size:30px">Tradition since 1889</h5>
      <p class="text-black" style="font-size:20px">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum..</p>
    </div>
  </div>
  
</div>
</body>
</html>