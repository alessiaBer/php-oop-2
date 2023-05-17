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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>My Computer Cards</h1>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
            <div class="col">
                <?php foreach ($computers as $computer) ?>
                <div class="card">

                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    
</body>
</html>