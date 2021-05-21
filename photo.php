<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Iron Maiden</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="script.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</head>

<body class="body" onload="getTime()">

<div class="jumbotron-text-center">
  <h1>Witaj na stronie fanów Iron Maiden</h1>
  <p>Zapraszamy do lektury i posłuchania ich piosenek</p> 
</div>
  
<div class="container">
    <div id="currentTime"></div>
    <div class="row"> 
        <div id="navbar">
          <a class="active" href="index.php">Strona główna</a>
          <a href="news.php">Aktualności</a>      
          <a href="albums.php">Albumy</a> 
          <a href="tours.php">Trasa</a> 
          <a href="photo.php">Galeria zdjęć</a> 
          <a href="https://www.facebook.com/">Kontakt</a> 
        </div>
        <div class="col-sm-6 photo">
            <div>
                <a href="#" rel="graphics/acesHigh.jpg" class="galImg"> <img src="graphics/acesHigh.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Band1982.jpg" class="galImg"> <img src="graphics/Band1982.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/BruceOnStage.jpg" class="galImg"> <img src="graphics/BruceOnStage.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/IronMaidenSklad.jpg" class="galImg"> <img src="graphics/IronMaidenSklad.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Janek.jpg" class="galImg"> <img src="graphics/Janek.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Steve.jpg" class="galImg"> <img src="graphics/Steve.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Adrian.jpg" class="galImg"> <img src="graphics/Adrian.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/tourPhoto.jpg" class="galImg"> <img src="graphics/tourPhoto.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/plane.jpg" class="galImg"> <img src="graphics/plane.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Bruce.jpg" class="galImg"> <img src="graphics/Bruce.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/bandTour.jpg" class="galImg"> <img src="graphics/bandTour.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Nicko.jpg" class="galImg"> <img src="graphics/Nicko.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/concert.jpg" class="galImg"> <img src="graphics/concert.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/Dave.jpg" class="galImg"> <img src="graphics/Dave.jpg" class="mini"/> </a>
                <a href="#" rel="graphics/BruceSinging.jpg" class="galImg"> <img src="graphics/BruceSinging.jpg" class="mini"/> </a>
            </div>          
        </div>
        <div class="col-sm-6 photo">             
            <div id="mainPhoto">
                <img src="graphics/1.jpg" class="big" style="width: 100%; height:auto; max-height: 600px;" />
            </div>
        </div>      
    </div>   
</div>

<div class="footer">
  <footer id="foot">
    <?php echo "Dziękujemy za odwiedziny" ?>
    <p>Życzymy miłego dnia</p>
  </footer> 
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>