<?php
include 'Animal.php';
    class Perro extends Animal {
        private $especie;

        public function __construct(string $nombre, string $especie)
        {
            parent::__construct($nombre);
            $this->especie=$especie;
        }

        public function ladrar() {
            echo "$this->nombre está ladrando.";
        }

        // Sobreescribe el metodo presentar.
        public function presentar()
        {
            echo "Hola me llamo $this->nombre y soy de la especie $this->especie";
        }
    }

    $miPerro = new Perro("Rex","Pastor Alemán");
    $miPerro->presentar(); // Usa el método de la clase Perro.
    echo "<BR>";
    $miPerro->ladrar();   
?>