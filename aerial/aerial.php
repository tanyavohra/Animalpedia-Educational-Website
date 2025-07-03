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
          <div class="flip-box-front" >
           <img src="images/flamingo.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>FLAMINGO <br><br></h2>
            <p>-Long, slender legs and neck<br>
              - Pink or reddish feathers<br>
              - Large, curved bill adapted for filtering food<br>
              - Stands on one leg while resting<br>
              - Nest is a mud mound built in water<br>
              - Known for distinctive, elegant posture</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card2">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/parrot.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>PARROT<br><br></h2>
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

    <div  class="card3">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/kingfisher.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>KINGFISHER <br><br></h2>
            <p> KINGFISHER- Bright, colorful plumage<br>
              - Small to medium-sized<br>
              - Large, sharp beak<br>
              - Found near water bodies<br>
              - Eats fish, insects, small animals<br>
              - Dives to catch prey<br>
              - Nests in riverbank burrows</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card4">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/woodpecker.jpeg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>WOODPECKER<br></h2>
            <p>- Strong, chisel-like beak for drilling into wood<br>
              - Vivid plumage, often with bright colors or patterns<br>
              - Known for drumming on trees to communicate<br>
              - Long, sticky tongue to extract insects from wood<br>
              - Claws adapted for climbing and clinging to tree trunks<br>
              - Nests in cavities made in trees or wooden structure</p>
          </div>
        </div>
      </div>
    </div>

    <div  class="card5">
        <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" >
           <img src="images/Nightingale.jpg" style="width: 100%; height: 25rem;">
          </div>
          <div class="flip-box-back">
            <h2>NIGHTINGALE <br><br></h2>
            <p>- Small, brownish or grayish bird<br>
              - Known for its beautiful, melodious song<br>
              - Inhabits dense shrubs and woodlands<br>
              - Active mainly at night, hence the name<br>
              - Feeds on insects, worms, and small invertebrates<br>
              - Males sing to  defend territory</p>
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