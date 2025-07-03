<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="home.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

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
                <a class="navbar-brand"
                    href="#visit">Visit</a>
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
          <a href="/ZOO/signin.php">  <button type="submit" class="btn" id="btn_sign">Sign In</button></a>
        </div>
    </nav>


    <div class="d-flex flex-column mb-3">
        <a href="/acquatic/acquatic.html">
            <div class=" aquatic pt-5 "><img src="images/font-removebg 3.png" class="aquaticfont_img"></div>
        </a>

        <div class=" air ">
            <!-- <video autoplay muted loop id="myVideo">
                <source src="images/airvideo.mp4" type="video/mp4" class="video">
              </video> -->
            <a href="/aerial/aerial.html"><img src="images/airfont.png" class="airfont_img"></a>
        </div>
        <div class=" land pt-5">
            <a href="/land/land.html"><img src="images/landfont.png" class="landfont_img"></a>
        </div>

        <div class="help pt-5">
            <a href=" https://www.peta.org/"  id="peta"><p>PETA</p></a>
        </div>
       
        <div class="visit pt-5">
            <a href="https://www.tripadvisor.in/Attraction_Review-g304555-d2060731-Reviews-Jaipur_Zoo-Jaipur_Jaipur_District_Rajasthan.html"  id="visit"><p>VISIT</p></a>
        </div>
       
    </div>

   
    <footer class="footer p-5">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>ZOO</h2>
                </div>
                <div class="col-md-3">
                    <h5 id="aboutus">About Us</h5>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, quae!
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Email: info@example.com</li>
                        <li>Phone: +1233567890</li>
                        <li>Address: 123 Street, City, Country</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <ul class="list-inline footer-links">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <hr>

        </div>
        </div>
    </footer>

</body>

</html>