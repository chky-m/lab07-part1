<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Brian">
    <meta name="description" content="This is my first PHP page.">
    <meta name="keywords" content="PHP, HTML, CSS, JavaScript">
    <title>Using PHP variables, arrays, and operators</title>
</head>
<body>
    <h1>Using PHP variables, arrays, and operators</h1>
<?php
    $days = array (
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    );

    echo "<p> The days of the week in English are:<br>";
    echo implode(", ", $days) . "</p>";

    $days = array (
        "Monday" => "Lundi",
        "Tuesday" => "Mardi",
        "Wednesday" => "Mercredi",
        "Thursday" => "Jeudi",
        "Friday" => "Vendredi",
        "Saturday" => "Samedi",
        "Sunday" => "Dimanche"
    );
    echo "<p> The days of the week in French are:<br>";
    echo implode(", ", $days) . "</p>";
?>
</body>
</html>