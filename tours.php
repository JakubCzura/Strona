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
            <h2>Iron Maiden wyrusza w trasę!</h2>
            <h4>Nie przegapcie okazji na niezapomniany koncert!</h4>           
                <p>2022 LEGACY OF THE BEAST TOUR:</p>

                <p>Czerwiec 04 - Finland Hyvinkää Rockfest</p>
                <p>Czerwiec 11 - UK Donington Download Festival</p> 
                <p>Czerwiec 13 - N.Ire Belfast Ormeau Park Belsonic Festival</p>
                <p>Czerwiec 16 - Belgium, Dessel Graspop</p>
                <p>Czerwiec 18 - Denmark, Copenhagen, Copenhell</p>
                <p>Czerwiec 20 - Czech Republic Prague Sinobo Stadium</p>
                <p>Czerwiec 23 - Norway Oslo Tons Of Rock</p>
                <p>Czerwiec 26 - France Paris La Defense Arena</p>
                <p>Czerwiec 27 - Netherlands Arnhem Gelredome</p>
                <p>Czerwiec 30 - Switzerland Zurich Hallenstadion </p>

                <p>Lipiec 02 - Germany Cologne Rhein-Energie-Stadium </p>
                <p>Lipiec 04 - Germany Berlin Waldbühne</p>
                <p>Lipiec 07 - Italy Bologna Sonic Park</p>
                <p>Lipiec 09 - Germany Stuttgart Cannstatter Wasen</p>
                <p>Lipiec 10 - Austria Wiener Neustadt Stadium Open-Air</p>
                <p>Lipiec 20 - Germany Bremen Bürgerweide</p>
                <p>Lipiec 22 - Sweden Gothenburg Ullevi Stadium</p>
                <p>Lipiec 24 - Poland Warsaw PGE Narodowy</p>
                <p>Lipiec 26 - Germany Frankfurt Deutsche Bank Park</p>
                <p>Lipiec 29 - Spain Barcelona Olympic Stadium</p>
                <p>Lipiec 31 - Portugal Lisbon Estadio Nacional</p>             
            </div>          
        </div>
        <div class="col-sm-6 photo">             
            <div id="mainPhoto">
                <img src="graphics/bandTour.jpg" class="big" style="width: 100%; height:auto; max-height: 600px;" alt="zdjęcie z trasy"/>
                <img src="graphics/tourPhoto.jpg" class="big" style="width: 100%; height:auto; max-height: 600px;" alt="zdjęcie z trasy"/>
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