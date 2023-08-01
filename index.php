<?php

$db = new PDO('mysql:host=db;dbname=collectorapp','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `name`,`year`,`director`,`genre` FROM `movies`");
$query->execute();
$movies = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite movies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav class="navbar"></nav>
        <p class="navbar-title">Favorite Movies</p>
    <div class="card">
        <h1>Name:</h1>
        <h2>Director:</h2>
        <p>Genre:</h2>
        <p>Year:</h2>
    </div>
</body>
</html>
