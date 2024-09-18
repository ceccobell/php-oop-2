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

    var_dump($giocoCani, $ciboCani, $ciboGatti, $cucciaCani, $giocoGatti);

?>