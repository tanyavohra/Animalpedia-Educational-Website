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
           <img src="images/catfish.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>CATFISH <br><br></h2>
            <p>- Freshwater fish with barbels around the mouth<br>
                - Bottom-dweller, often found in rivers and lakes<br>
                - Feeds on detritus, insects, and small fish<br>
                - Generally has a smooth, scaleless body<br>
                - Can grow to varying sizes depending on species</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card2">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/octopus.avif" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>OCTOPUS<br><br></h2>
            <p>- Marine mollusk with eight arms<br>
                - Highly intelligent and capable of problem-solving<br>
                - Uses camouflage and ink for defense<br>
                - Feeds on crustaceans, fish, and other small marine animals<br>
                - Has a soft, flexible body with no internal skeleton</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card3">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/aliigator.webp" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>ALIIGATORbr><br></h2>
            <p>- Large, semi-aquatic reptile<br>
                - Native to the Americas and China<br>
                - Has a broad snout and strong jaws<br>
                - Carnivorous diet (fish, birds, mammals)<br>
                - Prefers freshwater environments (swamps, rivers, lakes)<br>
                - Can grow up to 19 feet in length</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card4">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/crab.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>CRAB<br><br></h2>
            <p>- Hard shell<br>
                - Ten limbs (including claws)<br>
                - Omnivorous diet<br>
                - Moves sideways<br>
                - Various habitats (oceans, beaches, rivers)</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card5">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/stingray.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>STINGRAY<br><br></h2>
            <p>-Stingrays are a bottom-dwelling, flat fish<br>
                - purely carnivorous<br>
                -They Move by Flapping Their 'Wings'<br>
                - Closely Related to Sharks<br>
                - They Sleep in the Sand<br>
            </p>
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