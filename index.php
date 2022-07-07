<?php
include __DIR__ . '/Movie.php';

$avengers = new Movie('The Avengers','Avventura/azione');
$avengers->year = 2012;
$avengers->duration = '2h 23m';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<body>
    <main>
        <section>
            <div class="card_movie">
                <h2>Titolo:</h2><p><?php echo $avengers->title ?></p>
                <h2>Anno:</h2><p><?php echo $avengers->year ?></p>
                <h2>Genere:</h2><p><?php echo $avengers->genre ?></p>
                <h2>Durata:</h2><p><?php echo $avengers->duration ?></p>
            </div>
            <div class="card_movie">
                <h2>Titolo:</h2><p><?php echo $avengers->title ?></p>
            </div>
        </section>
    </main>
</body>
</html>