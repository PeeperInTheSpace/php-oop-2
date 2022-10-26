<!-- FOOD -->

<?php 

    require_once __DIR__ . "/Products.php";

    class Food extends Product {
        public $animal_typology;
        public $expire_date;

        function __construct($_repart, $_code, $_animal_typology, $_expire_date, $_price) {
            parent::__construct($_repart, $_code, $_price);
            $this->animal_typology = $_animal_typology;
            $this->expire_date = $_expire_date;
        }

        public function printInfo() {
            return "Reparto: $this->repart <br> Codice: $this->code <br> Prodotto per: $this->animal_typology <br> Data di scadenza: $this->expire_date <br> Prezzo: € $this->price";
        }
    }

?>