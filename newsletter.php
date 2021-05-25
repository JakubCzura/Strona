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
  <h1>Strona dla fanów muzyki</h1>
  <p>Prezentujemy albumy Iron Maiden!</p> 
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
      <img src="graphics/tour2022.jpg" alt="Trasa Iron Maiden" style="width:100%; height:auto;"> 
    </div>
    <div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/gb-ODJRnR00" title="YouTube video player" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen></iframe>
    </div>
    <div class="photo">
    
    <?php
    include_once 'database.php';
    $name = $_GET['f_name'];
    $lastName = $_GET['l_name'];
    $email = $GET['e_mail'];
    $city = $GET['city_c'];
    $age = $GET['age'];
    $message = $_GET['message'];

    if(!empty($name) && !empty($lastName) && !empty($email) && !empty($city) && !empty($age) && !empty($message))
    {
      $sql = "INSERT INTO Newsletter (Name, LastName, Email, City, Age, Message) VALUES ('$name', '$lastName', '$email', '$city', '$age', '$message')";
      if(mysqli_query($conn, $sql))
      {
          echo "Dziękujemy za przystąpienie do newslettera<br>";
      }
      else
      {
          echo "Błąd ".mysqli_error($conn). "<br>";
      }
      mysqli_close($conn);
      
      echo "Imię: ".$_GET['f_name']."<br>";
      echo "Nazwisko: ".$_GET['l_name']."<br>";
      echo "Email: ".$_GET['e_mail']."<br>";
      echo "Miasto: ".$_GET['city_c']."<br>";
      echo "Wiek: ".$_GET['age']."<br>";
      echo "Wiadomość dla zespołu: ".$_GET['message']."<br>";
    }  
    ?>
    </div> 
    


    <div class="col-sm-4 photo">
      <h3>Killers</h3>  
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>        
      <img src="graphics/2.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>The Number of the beast</h3> 
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p> 
      <img src="graphics/3.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>Piece of Mind</h3> 
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>         
      <img src="graphics/4.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>Powerslave</h3>
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>          
      <img src="graphics/5.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>Somewhere in Time</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/6.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>Seventh Son of a Seventh Son</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/7.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>No Prayer for the Dying</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/8.jpg" alt="iron maiden first album" width="200"> 
    </div>
    <div class="col-sm-4 photo">
      <h3>Fear of the Dark</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/9.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>The X Factor</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/10.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>Virtual XI</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/11.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>Brave new World</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/12.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>Dance of Death</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/13.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>A Matter of Life and Death</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/14.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>The Final Frontier</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/15.jpg" alt="iron maiden first album" width="200"> 
    </div> 
    <div class="col-sm-4 photo">
      <h3>The Book of Souls</h3>   
      <p>Oto album Iron Maiden, życzymy miłego słuchania. Mamy nadzieję, że się Państwu podoba 
        i miło umila wam czas w ten miły dzień. Miłego słuchania.</p>       
      <img src="graphics/16.jpg" alt="iron maiden first album" width="200"> 
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