<?php
    class Prodotto {
        public $titolo;
        public $prezzo;
        public $immagine;
        public $categoria;
        public $tipoArticolo;

        public function __construct($_titolo, $_prezzo, $_immagine, $_categoria, $_tipoArticolo) {
            
            if(!is_numeric($_prezzo) || $_prezzo < 0) {
                throw new Exception("Prezzo non valido.");
            }

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
?>