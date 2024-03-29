<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">
  <title>Document</title>
</head>
<body>
<header>
    <div class="Menu-Main">
      <div class="MenuButtons"><a href="index.php">Hem</a></div>
      <div class="MenuButtons"><a href="SearchAnimal.php">Mina Djur</a></div>
      <div class="MenuButtons LogoMenu"><a href="index.php">PHP Zoo</a></div>
      <div class="MenuButtons">Om mig</div>
      <div class="MenuButtons"><a href="katalog.php">Katalog</a></div>
    </div>
  </header>
  <main>
    <br> <br>
    <hr>
    <h3 class="WelcomTitle">Välkomen till min Zoo!</h3>
    <hr>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./IMG/GråJako3.jpeg" class="d-block MinCarosel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./IMG/Gädda.jpg" class="d-block MinCarosel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./IMG/Tordyvel1.jpg" class="d-block MinCarosel" alt="...">
      </div>
      <div class="carousel-item">
      <img src="./IMG/älg3.jpg" class="d-block MinCarosel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./IMG/Mört2Family.png" class="d-block MinCarosel" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>