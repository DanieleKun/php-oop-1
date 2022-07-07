<?php
include __DIR__ . '/Movie.php';

$avengers = new Movie('The Avengers','Avventura/azione');
$avengers->year = 2012;
$avengers->duration = '2h 23m';
$avengers->valutation = 3;

$martian = new Movie('Sopravvissuto - The Martian', 'Sci-fi/Avventura');
$martian->year = 2015;
$martian->duration = '2h 24m';
$martian->valutation = 4.5;

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
                <h3>Titolo:</h3><p><?php echo $avengers->title ?></p>
                <h3>Anno:</h3><p><?php echo $avengers->year ?></p>
                <h3>Genere:</h3><p><?php echo $avengers->genre ?></p>
                <h3>Durata:</h3><p><?php echo $avengers->duration ?></p>
                <?php $avengers->getValutation($avengers->valutation); ?>
            </div>
            <div class="card_movie">
                <h3>Titolo:</h3><p><?php echo $martian->title ?></p>
                <h3>Anno:</h3><p><?php echo $martian->year ?></p>
                <h3>Genere:</h3><p><?php echo $martian->genre ?></p>
                <h3>Durata:</h3><p><?php echo $martian->duration ?></p>
                <?php $martian->getValutation($martian->valutation); ?>
            </div>
        </section>
    </main>
</body>
</html>