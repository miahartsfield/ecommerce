<?php
   include 'functions/user-functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Day of the week</title>
<link rel="stylesheet" type="text/css" href="main.css">
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

<?php
    $dayofweek = date("w");
    switch ($dayofweek) {
        case 1;
            echo "It is Monday!";
            break;
        case 2;
            echo "<p>It is Tuesday!<p>";
            break;
        case 3;
            echo "It is Wendnesday!";
            break;
        case 4;
            echo "It is Thursday!";
            break;
        case 5;
            echo "It is Friday!";
            break;
        case 6;
            echo "It is Saturday!";
            break;
        case 0;
            echo "It is Sunday!a";
            break;
    }
?>
</body>

</html>