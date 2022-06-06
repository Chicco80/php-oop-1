<?php
require_once __DIR__ .'/Classes/Movie.php';



$movies=[
    [
        'img'=>'./img/leoni.jpg',
        'title'=>'Una Notte da Leoni',
        'genre'=>'Commedia',
        'year'=>'2003',
        'price'=>'3.99'
    ],
    [
        'img'=>'./img/fight.jpg',
        'title'=>'Fight Club',
        'genre'=>'Dramma',
        'year'=>'1999',
        'price'=>'2.99'
    ],
    [
        'img'=>'./img/matrix.jpg',
        'title'=>'Matrix',
        'genre'=>'Fantascenza',
        'year'=>'2000',
        'price'=>'1.99'
    ],
    [
        'img'=>'./img/ring.jpg',
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <title>php-oop-1</title>
</head>
<body>
    <h1>Movies</h1>



    <div class="container d-flex">
        
            <?php foreach($movies as $key=>$value){
                $movie = new Movie($value['img'], $value['title'], $value['genre'], $value['year'], $value['price'])?>
                <div class="card mx-2 my-4" style="width: 18rem;">
                    <img src="<?php echo $movie->getImg() ?>" class="card-img-top" alt="..."> 
                    <div class="card-body">
                    <h5><?php echo $movie->getTitle() ?> </h5>
                                <p > Genere: <?php echo $movie->getGenres() ?></p>
                                <p> Anno di Uscita: <?php echo $movie->getYear() ?></p>
                                <p> Prezzo Noleggio: <?php echo $movie->getPrice() ?></p>
                </div>
    </div>
    <?php
                    }
            ?>
</body>
</html>

<style>
    body{
        background: #cecece;
    }
    img{
        height:500px;
    }

    .card-body{
        width:100%;
        background-color: grey;
        color:white;
    }



</style>