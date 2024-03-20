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
    background-position: cover;
    width: 100%;
    height:100%;

  }


  .back{
    background-color:#1437c4;
    color:#ffffff;
    }
  .NAME{
    color:#c70404;
    font-family:Georgia;
    font-size: 30px;
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

<button class="back"  onclick="goBack()">Go Back</button>




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
        <img src="black_coffee.webp" alt="Chania" width="500" height="500">
        <div class="carousel-caption">
          <h3 class="NAME">BLACK_COFFEE</h3>
          <p class="NAME">“Black coffee is my morning ritual, bringing clarity and focus to each day”.</p>
        </div>
      </div>

      <div class="item">
        <img src="americano_coffee.jpg" alt="Chania" width="500" height="500">
        <div class="carousel-caption">
          <h3 class="NAME">AMERICANO_COFFEE</h3>
          <p class="NAME">"Once you wake up and smell the coffee, it's hard to go back to sleep".</p>
        </div>
      </div>

      <div class="item">
        <img src="Doppio.jpg" alt="Flower" width="500" height="500">
        <div class="carousel-caption">
          <h3 class="NAME">DOPPIO</h3>
          <p class="NAME">"Mental health problems are no match to coffee therapy"</p>
        </div>
      </div>

      <div class="item">
        <img src="espresso.jpg" alt="Flower" width="500" height="500">
        <div class="carousel-caption">
          <h3 class="NAME">ESPRESSO</h3>
          <p class="NAME">"Espresso helps me to do stupid things at greater efficiency".</p>
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
