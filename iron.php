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
      <a href="https://www.facebook.com/">Kontakt</a> 
    </div>
    <div class="col-sm-4 photo">
      <h3>Iron Maiden</h3>
      <p>Iron Maiden – debiutancki album brytyjskiego zespołu wydany 14 kwietnia 1980 roku.
    Większość utworów została skomponowana przez lidera Steve Harrisa, wyjątki stanowią Remember Tomorrow i Running Free napisane 
    wspólnie z wokalistą Paulem Di'Anno oraz Charlotte the Harlot - samotna kompozycją gitarzysty Dave Murraya. 
    Płyta zyskała dużą popularność do tracącego już popularność punku oraz zespołów rockowych i blues 
    rockowych z lat 70. Zespół odrzucił elementy bluesa na rzecz szybszych i bardziej skomplikowanych kompozycji z lekkim punkowym 
    wokalem za sprawą obecnego wtedy wokalisty, stając się najpopularniejszym zespołem z nowego nurtu muzycznego w Wielkiej Brytanii
    jakim był New Wave of British Heavy Metal. Sam lider określał styl jako heavy rock.
    Wadą albumu jest pozostawiająca sobie nieco do życzenia produkcja, o czym do dziś wspomina sam Steve Harris –
    założyciel i lider zespołu. Album zajął czwarte miejsce na krajowych listach przebojów. </p>            
    </div>
    <div class="col-sm-4 photo">             
      <img src="graphics/1.jpg" alt="iron maiden album" style="width:100%; height:auto;">
    </div>
    <div class="col-sm-4 photo">
    
    </div>   
    
  </div>
  <div class="youtubeLink">
    
  </div>  
  <div class="youtubeLink">
    <h2> Link do posłuchania w YouTube:
      <br/>
      <a href="https://www.youtube.com/watch?v=7DcVwd31uC0&list=OLAK5uy_misJV8zMkwu8-oBoebFKPsdE_LDrdq-xA " target="_blank" title="Kliknij, by otworzyć w YouTube">  
      <img src="graphics/youtube.jpg" alt="link do youtube'a" width=300 height=50 /> </a> <!-- target="blank" otwiera w nowym oknie -->
    </h2>
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