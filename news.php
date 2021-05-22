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
                <h2>Wieczór z Brucem Dickinsonem</h2>
                <h4>Wokalista opowie o trasach Iron Maiden od kuchni</h4>  
                <img src="graphics/BruceTour.jpg" class="big" style="width: 50%; height:auto; max-height: 600px;" alt="zdjęcie z trasy"/>          
                <p>Bruce znany jest nie tylko ze śpiewania, jest on również pilotem
                i podczas tras zespołu zasiada za sterami Ed Force One.
                Tym razem zaprasza na wieczorne spotkania, podczas to których
                opowie między innymi o tym jak to jest pilotować tak ciężkie maszyny,
                jak wygląda przygotowanie zespołu i grupy do wyjazdu w trasę, a także
                czy zespół planuje wydać kolejny album.</p>             
            </div>          
        </div>
        
        <div class="col-sm-6 photo">
            <div>
                <h2>Heavy Metal Truants</h2>
                <h4>Bruce Dickinson dołącza do akcji</h4>  
                <img src="graphics/heavymetalTruants.jpg" class="big" style="width: 70%; height:auto; max-height: 600px;" alt="zdjęcie z trasy"/>          
                <p>Od 2013 roku Heavy Metal Truants przemierzają na rowerach trasę
                od Londynu do Castle Donington, a to wszystko, aby zebrać pieniądze
                dla potrzebujących. Akcja wspiera takie akcje charytatywne jak
                Nordoff Robbins, Childline, Teenage Cancer Trust i Save the Children.
                Organizacje i ich podopieczni zostali dotkliwie pokrzywdzeni przez pandemię koronawirusa,
                więc wszyscy zbieramy siły, wsiadamy na rowery i jedziemy zbierać pieniądze
                dla najbardziej potrzebujących. Heavy Metal Truants zawita na Download Festiwal,
                gdzie zagra również Iron Maiden. Przez całą akcję wszyscy możemy się zjednoczyć
                i pomóc tym, którzy naprawdę są w ciężkiej sytuacji zdrowotnej. Do dzieła!</p>             
            </div>          
        </div>

        <div class="col-sm-6 photo">
            <div>
                <h2>Iron Maiden wydaje własne piwo</h2>
                <h4>Skosztuj pysznego napoju</h4>  
                <img src="graphics/beer.jpg" class="big" style="width: 50%; height:auto; max-height: 600px;" alt="zdjęcie z trasy"/>          
                <p>Zespół wydaje piwo pod swoją nazwą "Trooper", które produkowane będzie
                przez lokalny browar Robinsons Brewery. Napój charakteryzować się ma klasycznym angielskim 
                smakiem z 4.1% zawartością alkoholu. Część dochodu ze sprzedaży ekipa zamierza przeznaczyć
                na cele charytatywne. W pracach nad produkcją i akcją pomocy pomaga Help for Heroes, angielska
                organizacja charytatywna, która wspiera w rekonwalescencji personel, który
                został ranny lub kontuzjowany podczas pracy, a także silnie wspiera ich rodziny.</p>             
            </div>          
        </div>

        <div class="col-sm-6 photo">
            <div>
                <h2>Aukcje charytatywne Roda</h2>
                <h4>Sukces w obdarowywaniu pomocą</h4>  
                <img src="graphics/charity.jpg" class="big" style="width: 70%; height:auto; max-height: 600px;" alt="zdjęcie z trasy"/>          
                <p>Wielkie podziękowania dla wszystkich, którzy wzieli udział w aukcji charytatywnej Roda Smallwooda. 
                Dzięki waszej ogromnej hojności udało się zebrać ponad 12.000£ w ostatnim miesiący. Pieniądze zostaną
                przekazane na dziecięce organizacje niosące im pomoc, Nordoff Robbins, ChildLine oraz Teenage Cancer Trust.
                Dzięki dla zespołu za podpisanie wszystkich rzeczy i przekazanie na przykład zegarka pilota Bruce'a. Zespół
                zapowiada kolejne licytacje, aby razem nieść dobro. Zachęcamy do udziału, na pewno wkrótce poinformują o możliwości pomocy
                dla najbardziej potrzebujących. Dzięki jeszcze raz wszystkim za pomoc, za to że przyłączacie się do tej pięknej 
                inicjatywy. Czyńcie dobro i z radością kochajcie każdego bliźniego!</p>             
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