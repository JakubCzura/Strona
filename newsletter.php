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
    $email = $_GET['e_mail'];
    $city = $_GET['city_c'];
    $age = $_GET['age'];
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
    else
    {
      echo "Prawdopodobnie któreś pole nie zostało uzupełnione <br>";
      echo "Prosimy o wypełnienie formularza jeszcze raz :) <br>";
    }  
    ?>
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