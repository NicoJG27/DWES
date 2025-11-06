
<?php
    class Animal 
    {
        protected $nombre;

        public function __construct($nombre) {
            $this->nombre = $nombre;
        }

        public function presentar() {
            echo "Hola me llamo $this->nombre";
        }
    }
?>