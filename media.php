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
      <a href="media.php">Kontakt</a> 
    </div>
    <div class="photo">
    
    <ul class="list">
      <li> <h3>Media społecznościowe</h3>          
            <a href="https://www.facebook.com/ironmaiden"> <img src="graphics/facebook.jpg" alt="facebook" width="50" height="50"/> </a> <br/>
            <a href="https://www.youtube.com/channel/UCaisXKBdNOYqGr2qOXCLchQ"> <img src="graphics/youtube2.jpg" alt="youtube" width="50" height="50"/> </a> <br/>
            <a href="https://www.instagram.com/ironmaiden/?hl=pl"> <img src="graphics/instagram2.jpg" alt="instagram" width="50" height="50"/> </a>
      </li>
      <li> <h3>Strona zespołu</h3> <a href="https://ironmaiden.com"> <img src="graphics/stronaglowna.jpg" alt="strona zespołu" width="200" height="45" /> </a> </li>
      <li> <h3>Strona z biletami</h3> <a href="https://www.ebilet.pl"> <img src="graphics/ebilet.jpg" alt="e bilet" width="200" height="45" /> </a> </li>
      <li> <img src="graphics/IronMaidenSklad.jpg" alt ="Zdjęcie zespołu" style="width:50%; height:auto;" /> </li>
    </ul> 
     
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