<?php
    interface AnimalInterface {
        public function hacerSonido();
    }

    class Perro implements AnimalInterface {
        public function hacerSonido() {
            echo "Guau!";
        }
    }

    class Gato implements AnimalInterface {
        public function hacerSonido() {
            echo "Miau!";
        }
    }

    $animales = [new Perro("Rex","Pastor Alemán"), new Gato()];

    foreach ($animales as $a) {
        $a->hacerSonido();
        echo "<br>";
    }
?>