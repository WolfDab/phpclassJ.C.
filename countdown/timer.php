<?php
$SEC_PER_MIN = 60;
$SEC_PER_HOUR = 60 * $SEC_PER_MIN;
$SEC_PER_DAY = 24 * $SEC_PER_HOUR;
$SEC_PER_YEAR = 365 * $SEC_PER_DAY;

$NOW = time();
$NEXT_DECADE = mkTime( 0, 0, 0, 5, 20, 2024);

$seconds = $NEXT_DECADE - $NOW;

$years = $seconds/$SEC_PER_YEAR;
$years = floor($seconds/$SEC_PER_YEAR);
$seconds = $seconds - ( $SEC_PER_YEAR * $years );

$days = floor($seconds/$SEC_PER_DAY);
$seconds = $seconds - ( $SEC_PER_DAY * $days);

$hour = floor($seconds/$SEC_PER_HOUR);
$seconds = $seconds - ( $SEC_PER_HOUR * $hour);

$minute = floor($seconds/$SEC_PER_MIN);
$seconds = $seconds - ( $SEC_PER_MIN * $minute);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>J.C.'s Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/base.css">
</head>
<body>
<header>
    <?php include ("../template/header.php") ?>
</header>
<nav>
    <?php include ("../template/nab.php") ?>
</nav>
<main>
    <h3>Countdown Timer</h3>
    <p>Next Decade: Total Seconds <?php $NEXT_DECADE ?></p>
    <?php echo "Years: $years | Days: $days | Minutes $minute | Seconds $seconds" ?>
</main>
<footer>
    <?php include ("../template/footer.php") ?>
</footer>
</body>
</html>
