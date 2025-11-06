<?php
    class Persona {
        private string $nombre;

        public function __construct($nombre) {
            $this->nombre = $nombre;
        }

        public function __toString() {
            return "Hola, soy " . $this->nombre;
        }

        public function __destruct() {
            echo "Destruyendo el objeto de " . $this->nombre . "\n";
        }
    }

    $p = new Persona("Carlos");
    echo $p; // Llama automáticamente a __toString()
    echo "<br>";
    // Finaliza el programa y llama automáticamente a __destruct.
?>