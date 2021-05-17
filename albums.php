<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</head>
<body class="body">

<div class="jumbotron-text-center">
  <h1>Strona dla fanów muzyki</h1>
  <p>Prezentujemy albumy Iron Maiden!</p> 
</div>
  
<div class="container">
  <div class="row"> 
    <div id="navbar">
      <a class="active" href="index.php">Strona główna</a>
      <a href="news.php">Aktualności</a>      
      <a href="albums.php">Albumy</a> 
      <a href="tours.php">Trasa</a> 
      <a href="https://www.facebook.com/">Kontakt</a> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>        
      <img src="grafika/1.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>  
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>        
      <img src="grafika/2.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3> 
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p> 
      <img src="grafika/3.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3> 
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>         
      <img src="grafika/4.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>          
      <img src="grafika/5.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="grafika/6.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="grafika/7.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="grafika/8.JPG" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 zdjecie">
      <h3>Okładka albumu</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="grafika/9.JPG" alt="iron maiden first album" width="200"> 
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