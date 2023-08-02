<?php

require_once('functions.php');
$db = new PDO('mysql:host=db;dbname=collectorapp','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`,`year`,`director`,`genre` FROM `movies`");
$query->execute();
$allMoviesAsArrays = $query->fetchAll();
$allMoviesAsObjects = [];
foreach($allMoviesAsArrays as $movieAsArray) 
{
    $movieAsObject = new Movie($movieAsArray['name'],$movieAsArray['director'],$movieAsArray['genre'],$movieAsArray['year']);
    array_push($allMoviesAsObjects, $movieAsObject);

};
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
        <section class="card-section">
            <div class="card">
                <?php foreach($allMoviesAsObjects as $movie) {
                   echo  $movie->createCard();
                } ?>

        </section>
    </div>
</body>
</html>
