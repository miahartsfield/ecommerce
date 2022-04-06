<?php
   include 'functions/user-functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
</head>
<title>Switch</title>
</head>

<body>

<header>
<nav>
    <ul>
        <li><a href="">nav1</a></li>
        <li><a href="">nav2</a></li>
        <li><a href="">nav3</a></li>
        <li><a href="">nav4</a></li>
    </ul>
</nav>
</header>

<h2>What is the first letter in the alphabet?</h2>
<?php
    $x = "1";

    switch ($x){
        case 1;
            echo "Answer is A";
        break;
        case 2;
            echo "Answer is B";
        break;
        case 3;
            echo "Answer is C";
        break;
        case 4;
            echo "Answer is D";
        break;
        default:
            echo "there is no answer";
    }
?>



</body>
</html>