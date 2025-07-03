<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="quiz.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <title>QUIZ</title>
</head>

<body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-md 
    navbar-dark ">
    <div class="logo">
      <img src="/zooquiz/QUIZIMAGES/logo.png" id="logo_img">
    </div>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarToggler">
        <a class="navbar-brand" href="#">About us</a><br>
        <a class="navbar-brand" href="#">Peta</a><br>
        <a class="navbar-brand" href="#">Visit</a>
        <div class="dropdown">
          <button class=" menu btn  dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Menu
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li class="nav-item">
              <a class="nav-link" href="/ZOO/land/land.php">Terrestrial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ZOO/acquatic/acquatic.php">Aquatic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ZOO/aerial/aerial.php">Aerial</a>
            </li>

          </ul>
        </div>
        <a class="navbar-brand" href="/ZOO/zooquiz/quiz.php">Quiz?</a>
      </div>
    </div>
    <div class="signin">
      <a href="/ZOO/zoohome/home.php"> <button type="submit" class="btn" id="btn_sign">Home</button></a>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- game -->

  <div class="d-flex flex-column mb-3" id="full">

    <div class="p-2" id="box1">

      <div class="d-flex flex-row bd-highlight mb-3">

        <div class="p-2 bd-highlight" id="one">

          <div class="ques"></div>
          <div class="mssg">
            <p class="heading">LET'S PLAY!</p>
          </div>

        </div>

        <div class="p-2 bd-highlight" id="two">
          <div class="photo"></div>
        </div>
      </div>

    </div>


    <div class="p-2" id="box2">
      <div class="d-flex flex-row bd-highlight mb-3">

        <div class="p-2 bd-highlight" id="three">
          <div class="section1">
            <button class="option" id="opt1"></button>
            <button class="option" id="opt2"></button>
          </div>
          <div class="section2">
            <button class="option" id="opt3"></button>
            <button class="option" id="opt4"></button>
          </div>


          <button id="next">START</button>
        </div>

        <div class="p-2 bd-highlight" id="four">
          <img src="QUIZIMAGES/SCORE.png" class="titlescore">
          <p id="score">0</p>
        </div>

      </div>
    </div>

  </div>
  <!-- game end -->

  <!-- footer -->
  <div></div>
  <!-- footer end -->


  <script src="quiz.js"></script>
</body>

</html>