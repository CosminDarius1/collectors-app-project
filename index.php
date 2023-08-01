<?php

$db = new PDO('mysql:host=db;dbname=collectorapp','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `name`,`year`,`director`,`genre` FROM `movies`");
$query->execute();
$allMoviesAsArrays = $query->fetchAll();
$allMoviesAsObjects = [];

    
        foreach($allMoviesAsArrays as $movieAsArray) 
        {
            $movieAsObject = new Movie($firstMovieAsArray['name'],$firstMovieAsArray['director'],$firstMovieAsArray['genre'],$firstMovieAsArray['year']);
            array_push($allMoviesAsObjects, $movieAsObject);
    
        };
      
    

$firstMovieAsArray = $allMoviesAsArrays[0];
$firstMovieAsObject = new Movie($firstMovieAsArray['name'],$firstMovieAsArray['director'],$firstMovieAsArray['genre'],$firstMovieAsArray['year']);

// function createCard(array $moviesDatabase) {
//     foreach($moviesDatabase as $movies) 
//     { 
//            echo"<h1>";
        //       echo($movies['name']);
        //    echo"</h1>";
        //    echo"<p>";
        //        echo($movies['director']);
        //    echo"</p>";
        //    echo"<p>";
        //        echo($movies['genre']);
        //    echo "</p>";
        //    echo "<p>";
        //        echo($movies['year']);
//            echo "</p>";
//        }
// };

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
            <?php 
            // createCard($moviesDatabase);
            ?>
        </section>
    </div>
</body>
</html>
