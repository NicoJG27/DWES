<?php
// Ejercicio 1
function esPar(int $num): bool {
    return $num % 2 == 0;
}

// Ejercicio 2
function arrayAleatorio(int $tam, int $min, int $max): array {
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    
    }
    return $array;
}

// Ejercicio 3
function arrayMayores(array &$array): array {
    $resultado = [];
    foreach ($array as $valor) {
        if ($valor > 10) {
            $resultado[] = $valor;
        }
    }
    return $resultado;
}

// Ejercicio 4
function mayor(...$nums): int {
    $max = $nums[0];
    foreach ($nums as $n) {
        if ($n > $max) $max = $n;
    }
    return $max;
}

// Ejercicio 5
function digitoN(int $num, int $pos): int {
    $numStr = strval($num);
    return intval(substr($numStr, $pos - 1, 1));
}

// Ejercicio 8
function dividir(float $dividendo, float $divisor = 4) {
    if ($divisor == 0) return "Error: División por cero";
    return $dividendo / $divisor;
}

// Ejerccio 9
function aumentarVisitas(int &$visitas) {
    $visitas++;
}

// Ejercicio 10
$iva = 0.21;
$calcularPrecioFinal = fn($precio) => $precio * (1 + $iva);

// Ejercicio 11
function generaMatrizCartasRand(int $n): array {
    $palos = ['c', 'd', 'p', 't'];
    $cartas = [];
    for ($i = 0; $i < $n; $i++) {
        $palo = $palos[array_rand($palos)];
        $numero = rand(1, 13);
        $cartas[] = "$palo$numero";
    }
    return $cartas;
}
?>
