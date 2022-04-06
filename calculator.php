<?php
   include 'functions/user-functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
</head>
<title>Calculator</title>
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

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
       <option>None</option>
       <option>Add</option>
       <option>Substract</option>
       <option>Multiply</option>
       <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p> The Answer is:</p>
<?php
  If (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator){
      case "None":
        echo "You need to select a method!";
        break;
      case "Add":
        echo $result1 + $result2;
        break;
      case "Subtract":
        echo $result1 - $result2;
        break;
      case "Mutiply":
        echo $result1 * $result2;
        break;
      case "Divide":
        echo $result1 / $result2;
        break;
    }
  }
?>
</body>
</html