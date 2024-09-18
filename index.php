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

    $gioco_cani = new Prodotto("osso", "30", "https://www.amicipappagalli.it/wp-content/uploads/2015/03/DSC_0236.-osso-bianchi-nodo-naturale-piatto-gt054.jpg", "cani", "morbidi");

    var_dump($gioco_cani);
?>