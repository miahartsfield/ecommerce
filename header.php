
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="tttstylesheet" href ="main.css">
    <script src="https://kit.fontawesome.com/ee9fa59c39.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>E-commerce</title>

  </head>
  <body>
    <!--Nav-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
          <i class="fa-solid fa-paw"></i>
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navbarCollaspe">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collaspe navbar-collaspe"id="navbarCollaspe">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"> 
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="calculator.php" class="nav-link">Calculator</a>
                </li>
                <li class="nav-item active">
                    <a href="array.php" class="nav-link">Arrays</a>
                </li>
                <li class="nav-item active">
                    <a href="dayofweek.php" class="nav-link">Days of the Week</a>
                </li>
                <li class="nav-item active">
                    <a href="switch.php" class="nav-link">switch</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!---End Of Nav bar-->

<?php

$_SESSION['username'] = "miah23";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
      echo "You are not logged in";
} else{
    echo "You are logged in!";
}

?>
<nav>
    <ul>
        <li><a href="">nav1</a></li>
        <li><a href="">nav2</a></li>
        <li><a href="">nav3</a></li>
        <li><a href="">nav4</a></li>
    </ul>
</nav>
<header>
    <nav>
        <a href="">
            <img src="img/border-collie-puppy.jpg" alt="">
        </a>
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
        </div>
    </nav>  
</header>
</body>
</html>