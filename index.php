<?php
    require_once 'prodotti.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($prodotti as $prodotto){ ?>
            <div class="col">
                <div class="card mt-5">
                    <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto->titolo ?></h5>
                        <span class="card-text"><?php echo $prodotto->prezzo ?>&euro;</span>
                    </div>
                </div>
            </div>
            <?php } ?> 
        </div>
    </div>
</body>
</html>