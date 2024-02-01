<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops and Strings</title>
    <link rel="stylesheet" type="text/css" href="../style/base.css">
</head>
<body>
<header>
    <?php include ("../template/header.php") ?>
</header>
<nav>
    <?php include ("../template/nab.php") ?>
</nav>
<main>
    <h3>Loops and Strings</h3>
    <?php
    $number = 100;
    print $number;
    echo "<h1>" . $number . "</h1>";
    echo "<hr>";
    echo "<h1>";
    echo $number;
    echo "</h1>";
    echo "</hr>";
    echo "<h1>";
    echo "<h1>$number</h1>";
    echo "<hr>";

    $result = "<h1>";
    $result .= $number;
    $result .= "</h1><hr>";
    echo $result;
    echo $result;
    echo $result;

    $number1 = 100;
    $number2 = "50";
    $result = $number1 + $number2;
    echo "<h1>$result</h1></hr>";

    echo "<h3>While Loop</h3>";

    $i = 1;
    while ($i < 7){
        echo "<h$i> While Loops </h$i>";
        $i++;
    }

    echo "<h3>Do While Loop</h3>";
    $i = 6;
    do{
        echo "<h$i> Do While Loops </h$i>";
        $i--;
    } while ( $i > 0 );

    echo "<h3>For Loop</h3>";

    for ( $i = 1; $i <= 6; $i++ ) {
        echo "<h$i> For Loops </h$i>";
    }

    echo "<h3>String Function</h3>";

    $full_name = "Bob Smith";

    $position = strpos($full_name, ' ');
    echo "<h6>The space is in the $position position</h6>";
    echo $full_name . "<hr>";
    echo strtoupper($full_name) . "<hr>";
    echo strtolower($full_name) . "<hr>";

    $name_parts = explode(' ', $full_name);
    echo "First Name: " . $name_parts[0];
    echo "<br>";
    echo "Last Name: " . $name_parts[1];
?>
  </main>
<footer>
    <?php include ("../template/footer.php") ?>
</footer>
</body>
</html>
