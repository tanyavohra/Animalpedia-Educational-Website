<?php
include('config/database.php');



//Form submit working
if (isset($_POST['submit'])) {
    extract($_POST);

    
    $sql = "INSERT INTO signup(username,email,password) VALUES ('$username','$email','$password')";

    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['success'] = "User has been created";
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }
}
?>



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
    <link href="index.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="signin.php" method="post">
                <h1>Create Account</h1>

                <input type="text" placeholder="Name" name="username">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder=" Create Password" name="password">
                <input type="password" placeholder=" Confirm Password">
                <button type="submit" name="submit" class="submit">Sign Up</button>
            </form>


        </div>
        <div class="form-container sign-in">



            <?php
include('config/database.php');



//Form submit working
if (isset($_POST['submit'])) {
    extract($_POST);

    
    $sql = "INSERT INTO login(username,email,password) VALUES ('$username','$email','$password')";

    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['success'] = "User has been created";
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }
}
?>
            <form action="signin.php" method="post">
                <h1>Login</h1>
                <input type="text" placeholder="Name" name="username">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" name="submit" class="submit">Login</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>If you are already registered!</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Sign up!</h1>
                    <p>Register if you are not registered</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
        let login = document.querySelector(".submit");
        login.addEventListener("click", () => {
            window.location.pathname = "ZOO/zoohome/home.php";
        })

    </script>


</body>

</html>