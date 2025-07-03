<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aerial</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="aerial.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body3">

  <!-- NAVIGATION -->

  <nav class="navbar navbar-expand-md 
    navbar-dark ">
    <div class="logo">
      <img src="images/logo.png" id="logo_img">
    </div>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarToggler">
        <a class="navbar-brand" href="#">About us</a><br>
        <a class="navbar-brand" href="https://www.peta.org/">Peta</a><br>
        <a class="navbar-brand" href="https://www.tripadvisor.in/Attraction_Review-g304555-d2060731-Reviews-Jaipur_Zoo-Jaipur_Jaipur_District_Rajasthan.html">Visit</a>
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

  <!-- content -->
  <div class="cards">
    <div class="card1">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="images/ostrich.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>OSTRICH <br><br></h2>
            <p>- Large, flightless bird<br>
              - Long neck and legs<br>
              - Fast runner, up to 45 mph<br>
              - Lives in open grasslands and savannas<br>
              - Unique feather structure (loose and fluffy)<br>
              - Largest living bird by height</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card2">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="images/crow.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>CROW<br><br></h2>
            <p>- Colorful plumage<br>
              - Strong, curved beak<br>
              - Intelligent and social<br>
              - Can mimic sounds and speech<br>
              - Eats fruits, seeds, and nuts<br>
              - Often kept as pets<br>
              - Highly adaptable to different environments</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card3">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="images/vulture.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>VULTURE <br><br></h2>
            <p> - Large, scavenging bird<br>
              - Bald head with minimal feathers<br>
              - Strong, hooked beak for tearing flesh<br>
              - Excellent sense of smell or sight <br>
              - Soars at high altitudes for finding food<br>
              - Feeds on carrion (dead animals)<br>
              - Often found in open landscapes and savannas</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card4">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="images/sparrow.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>SPARROW<br></h2>
            <p>- Small, brown or gray plumage<br>
              - Short, stout beak<br>
              - Common in a variety of habitats (gardens, parks, urban areas)<br>
              - Omnivorous diet (seeds, insects, small fruits)<br>
              - Nests in shrubs, trees, or buildings<br>
              - Known for their chirping and singing<br>

              - Frequently seen in both rural and urban settings</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card5">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="images/duck.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>DUCK <br><br></h2>
            <p>- Webbed feet for swimming<br>
              - Broad, flat bill<br>
              - Typically found in freshwater habitats (ponds, lakes, rivers)<br>
              - Can be dabbling or diving species<br>
              - Known for quacking sounds <br>
              - Migratory in some species<br>
              - Commonly kept as domestic poultry</p>
          </div>
        </div>
      </div>
    </div>


  </div>
  <nav aria-label="Page navigation example" class="next">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="/ZOO/aerial/aerial.php">Previous</a></li>

      <li class="page-item"><a class="page-link" href="/ZOO/aerial/aerial2.php">Next</a></li>
    </ul>
  </nav>





</body>

</html>