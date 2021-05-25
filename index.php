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
    <div class="col-12">
                <section>
                    <h3> Newsletter</h3>
                    <h4> Zapisz się, aby otrzymywać informacje na bieżąco </h4>
                    <form action="newsletter.php" method="GET" oninput="x.value=parseInt(age.value)"
                            autocomplete="off">
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
                        <div class="row">
                            <div class="col"> 
                                <label for="e_mail" class="form-label">E-mail</label>
                                <input type="email" name="e_mail" class="form-control" id="e_mail" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="city_c" class="form-label"> Miasto </label>  
                                <input type="text" name="city_c" class="form-control" id="city_c" list="city">
                                <datalist id="city">
                                    <option value="Krakow">Kraków</option>
                                    <option value="Poznan">Poznań</option>
                                    <option value="Warszawa">Warszawa</option>
                                    <option value="Kielce">Kielce</option>
                                    <option value="Radom">Radom</option>
                                </datalist> 
                            </div>
                            <div class="col"> 
                                <label for="age" class="form-label">Wiek</label>
                                <input type="text" name="age" class="form-control" id="age" >
                            </div>
                        </div>
                        <div>
                            Wiadomość dla zespołu <br>
                            <textarea name="message" placeholder="Wiadomość" rows="5" cols="20"></textarea> 
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success" value="Zapisz">
                        </div>
                    </form>
                </section>
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