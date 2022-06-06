<?php
require_once __DIR__ .'/Classes/Movie.php';


$movies=[
    [
        'title'=>'Una Notte da Leoni',
        'genre'=>'Commedia',
        'year'=>'2003',
        'price'=>'3.99'
    ],
    [
        'title'=>'Fight Club',
        'genre'=>'Dramma',
        'year'=>'1999',
        'price'=>'2.99'
    ],
    [
        'title'=>'Matrix',
        'genre'=>'Fantascenza',
        'year'=>'2000',
        'price'=>'1.99'
    ],
    [
        'title'=>'The Ring',
        'genre'=>'Horror',
        'year'=>'2004',
        'price'=>'Free'
    ],
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h1>Lista Film</h1>
    <?php
    foreach($movies as $key=>$value){
        $movie = new Movie($value['title'], $value['genre'], $value['year'], $value['price'])
    
    ?>
    <h2>Title: <?php echo $movie->getTitle() ?></h2>
    <p>Genere:<?php echo $movie->getGenres() ?></p>
    <p>Anno Uscita:<?php echo $movie->getYear() ?></p>
    <p>Prezzo:<?php echo $movie->getPrice() ?></p>

    <?php
    }
    ?>
</body>
</html>