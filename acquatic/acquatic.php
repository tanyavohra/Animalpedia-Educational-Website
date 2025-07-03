<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquatic</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="acqua.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body1">

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
                <a class="navbar-brand" href="#peta">Peta</a><br>
                <a class="navbar-brand" href="#visit">Visit</a>
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
          <div class="flip-box-front" >
           <img src="images/dolphin.webp" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>DOLPHIN <br><br></h2>
            <p>- Intelligent marine mammal<br>
              - Sleek, streamlined body<br>
              - Social, often found in pods<br>
              - Feeds on fish and squid<br>
              - Known for acrobatic jumps and echolocation</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card2">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/turtle.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>TURTLE<br><br></h2>
            <p>-TURTLE- Reptile with a hard shell<br>
              - Lives in marine, freshwater, or terrestrial environments<br>
              - Herbivorous or omnivorous diet<br>
              - Slow-moving with strong swimming abilities (marine species)<br>
              - Long lifespan, often with slow growth</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card3">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/starfish.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>STARFISH<br><br></h2>
            <p>- Marine echinoderm with star-shaped body<br>
              - Typically has five or more arms<br>
              - Can regenerate lost limbs<br>
              - Feeds on bivalves and small marine organisms<br>
              - Found on the sea floor in various ocean habitats</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card4">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/shark.webp" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>SHARK<br><br></h2>
            <p>- Apex predator of the ocean<br>
              - Cartilaginous skeleton<br>
              - Sharp, multiple rows of teeth<br>
              - Diverse species, from small to large<br>
              - Predominantly carnivorous diet</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card5">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/jellyfish.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>JELLYFISH<br><br></h2>
            <p>- Gelatinous, translucent body<br>
              - Equipped with tentacles for stinging<br>
              - Found in oceans worldwide<br>
              - Mostly drift with currents<br>
              - Can vary in size from small to large</p>
          </div>
        </div>
      </div>
    </div> 
   

</div>
<nav aria-label="Page navigation example" class="next">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="/ZOO/acquatic/acquatic.php">Previous</a></li>
    
    <li class="page-item"><a class="page-link" href="/ZOO/acquatic/acquatic2.php">Next</a></li>
  </ul>
</nav>

 

   
    
</body>

</html>