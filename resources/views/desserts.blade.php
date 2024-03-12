<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }



  </style>
</head>
<body>



<script>
function goBack() {
  window.history.back()
}
</script>
</head>
<body>

<button onclick="goBack()">Go Back</button>



<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    

      <div class="item active">
        <img src="cassava cake.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
         
          <h3>CASSAVA CAKE</h3>
          <p>"Life is uncertain. Eat dessert first." </p>
        </div>
      </div>

      <div class="item">
        <img src="bibingkang malagkit.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>BIBINGKANG MALAGKIT</h3>
          <p>"Life is short. Eat dessert first."</p>
        </div>
      </div>

      <div class="item">
        <img src="ube halaya.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>UBE HALAYA</h3>
          <p>"Dessert is like a hug that lasts longer." </p>
        </div>
      </div>

      <div class="item">
        <img src="leche flan.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>LECHE FLAN</h3>
          <p>"Dessert is like a feel-good song, and the best ones make you dance." </p>
        </div>
      </div>

      <div class="col m6 large">
      <p class="text-black" style="font-size:20px">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum..</p>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
