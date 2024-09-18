<?php
    class Prodotto {
        public $titolo;
        public $prezzo;
        public $immagine;
        public $categoria;
        public $tipoArticolo;

        public function __construct($_titolo, $_prezzo, $_immagine, $_categoria, $_tipoArticolo) {
            $this->titolo = $_titolo;
            $this->prezzo = $_prezzo;
            $this->immagine = $_immagine;
            $this->categoria = $_categoria;
            $this->tipoArticolo = $_tipoArticolo;
        }
    }
    class Categoria {
        public $nomeCategoria;

        public function __construct($_nomeCategoria) {
            $this->nomeCategoria = $_nomeCategoria;
        }
    }
    class TipoArticolo {
        public $nomeTipoArticolo;

        public function __construct($_nomeTipoArticolo) {
            $this->nomeTipoArticolo = $_nomeTipoArticolo;
        }
    }

    $categoriaCani = new Categoria("Cani");
    $categoriaGatti = new Categoria("Gatti");

    $gioco = new TipoArticolo("Gioco");
    $cucce = new TipoArticolo("Cucce");
    $cibo = new TipoArticolo("Cibo");
    
    $giocoCani = new Prodotto("Pallina da tennis", 5, "https://ss-pics.s3.eu-west-1.amazonaws.com/files/1036351/large-61X1W2PAV5L._SL1000_.jpg?1582104879", $categoriaCani, $gioco);
   
    $ciboGatti = new Prodotto("Croccantini al salmone", 12, "https://www.animalhouseitalia.it/17095/trainer-natural-kitten-salmone-gr-300-croccantini-per-gatto.jpg", $categoriaGatti, $cibo);

    $cucciaCani = new Prodotto("Cuccia morbida", 45, "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg", $categoriaCani, $cucce);

    $giocoGatti = new Prodotto("Topo di peluche", 7, "https://www.toctocshop.com/media/catalog/product/cache/1b40543c03522e70d25a2e1d291e4ce9/f/f/ff7308b362ebe8ed85371b323662e9e85afe587802adc2eef8adb255759844df.jpeg", $categoriaGatti, $gioco);
  
    $ciboCani = new Prodotto("Scatoletta di manzo", 3, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxQHCAwqNgP2lfFDqziKBqTSiNl9VSCCTndQ&s", $categoriaCani, $cibo);
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
            <div class="col">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="<?php echo $giocoCani->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $giocoCani->titolo ?></h5>
                        <span class="card-text"><?php echo $giocoCani->prezzo ?>&euro;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>