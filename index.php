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

    var_dump($giocoCani);
?>