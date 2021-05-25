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
    <div class="col-sm-4 photo">
      <h3>Powerslave</h3>
      <p>Powerslave – piąty album studyjny heavymetalowej grupy Iron Maiden, wydany w 1984 roku. Został bardzo ciepło przyjęty 
        przez fanów na całym świecie ze względu na mocne i szybkie kompozycje, a jego komercyjny sukces zaowocował jedną z największych 
        i najlepszych tras koncertowych zespołu World Slavery Tour '84/85 – ogromnym przedsięwzięciem, które obejmowało ponad 300 
        koncertów na całym świecie. Iron Maiden rozpoczęli koncerty 9 sierpnia 1984 w Polsce. Był to pierwszy występ zespołu heavymetalowego za
        "żelazną kurtyną". Trasa promująca Powerslave trwała ponad 13 miesięcy, w ciągu których popularność Maiden osiągnęła granice
        na całym świecie. Sama trasa koncertowa doczekała się oficjalnego wydania pod tytułem Live After Death zawierająca nagranie z dwóch
        wyprzedanych przez fanów wieczorów w hali Long Beach Arena w Los Angeles. Powerslave to kolejny album, który zyskał miano platynowej
        płyty, oraz obecnie ostatni album Iron Maiden zawierający instrumentalny utwór oraz przez wiele lat najdłuższy utwór napisany przez 
        lidera Steve Harrisa "Rime of the Ancient Mariner trwający prawie 14 minut. Album promowały dwa single 2 Minutes to Midnight i Aces High. </p>            
    </div>
    <div class="col-sm-4 photo">             
      <img src="graphics/5.jpg" alt="iron maiden album" style="width:100%; height:auto;">
    </div>
    
    
    <div class="col-sm-4 photo">
      <div class="col-sm-12">
        <section>
          <h3> Ocena albumu</h3>
            <form action="res.php" method="GET" autocomplete="off">
              <div class="row">
                <div class="col">
                  <label for="f_name" class="form-label"> Imię </label>
                  <input type="text" name="f_name" class="form-control" id="f_name" autofocus>
                </div>
                <div class="col">
                  <label for="l_name" class="form-label">Nazwisko</label>
                  <input type="text" name="l_name" class="form-control" id="l_name">
                </div>
              </div>                     
              <div>
              Opinia <br>
              <textarea name="message" placeholder="Prosimy o kilka zdań o albumie" rows="5" cols="20"></textarea> 
              </div>
              <div>
                <input type="submit" class="btn btn-success" value="Zapisz">               
              </div>
            </form>
        </section>
      </div>
    </div>   
    
  </div>
  
  
  <div class="youtubeLink">
  <table class="table">
    <thead>
      <tr>
        <th>Nr</th><th>Imie</th><th>Nazwisko</th><th>Opinia o albumach</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include_once 'database.php';
      
      $sql = "SELECT Name, LastName, Comment FROM Comments";
      $nr = 0 ;
      $results = mysqli_query($conn, $sql);
      if(mysqli_num_rows($results) > 0)
      {
        while($row = mysqli_fetch_assoc($results))
        {
    ?>
        <tr>
          <td> <?php echo $nr; ?></td>
          <td> <?php echo $row['Name']; ?></td>
          <td> <?php echo $row['LastName']; ?></td>
          <td> <?php echo $row['Comment']; ?></td>
        </tr>
          <!--echo "Imie: ". $row['Name']. " Nazwisko: ". $row['LastName']. " Opinia: ". $row['Comment']. "<br>";-->
    <?php
          $nr++;
        }
      }
      else
      {
        echo "Brak rekordów <br>";
      }
    ?>
    </tbody>
  </table>

    <!--<h2>Co słuchacze myślą o albumach Iron Maiden:</h2>-->
    
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