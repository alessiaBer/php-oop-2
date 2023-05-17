<?php 
/* 
Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo polimorfo in ciascuna sottoclasse.
BONUS:
-pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
-aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).

*/
require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Laptop.php';
require_once __DIR__ . '/Models/Desktop.php';

include __DIR__ . '/Database/db.php';
foreach ($computers as $computer) {
    $computer->setType();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .card {
            border: 1px solid grey;
        }
        .card-img-top {
            height: 350px;
            padding-top: 1rem;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container">
        <h1 class="text-center text-white py-5">My Computer Cards</h1>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
            <?php foreach ($computers as $computer) : ?>
            <div class="col">
                <div class="card bg-transparent p-1">
                    <div class="card-img-top bg-white">
                        <img src="<?= $computer->imgPath ?>" alt="#">
                    </div>
                    <div class="card-body text-white">
                        <h4><?= $computer->model ?></h4>
                        <h5>Features:</h5>
                        <ul>
                            <li><strong>Type:</strong> <?= $computer->getType() ?></li>
                            <li><strong>Screen:</strong> <?= $computer->screen ?>"</li>
                            <li><strong>Keyboard:</strong> <?= $computer->keyboard ?></li>
                            <li><strong>USB Ports:</strong> <?= $computer->usbPorts ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>