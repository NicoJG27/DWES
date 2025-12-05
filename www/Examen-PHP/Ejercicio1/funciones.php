<?php

declare(strict_types=1);

function generarNumeros(int $cantidad = 5): array
{
    $numeros = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $numeros[] = random_int(1, 100);
    }
    sort($numeros);

    return $numeros;
}

function categoria(int $num): string
{
    if ($num <= 39) {
        return 'bajo';
    }

    if ($num <= 69) {
        return 'medio';
    }

    return 'alto';
}

function codigoCategoria(string $categoria, int $numero): string
{
    return substr($categoria, 0, 2) . '-' . $numero;
}

function contarPorCategoria(array $numeros): array
{
    $conteo = [
        'bajo' => 0,
        'medio' => 0,
        'alto' => 0,
    ];

    foreach ($numeros as $numero) {
        $cat = categoria($numero);
        $conteo[$cat]++;
    }

    return $conteo;
}

function escribir(array $numeros, string $ruta = __DIR__ . '/salida.log'): void
{
    $fecha = date('d.m.Y');
    $lineas = [];

    foreach ($numeros as $numero) {
        $lineas[] = sprintf('%s El número %d pertenece a la categoría %s', $fecha, $numero, categoria($numero));
    }

    file_put_contents($ruta, implode(PHP_EOL, $lineas) . PHP_EOL, FILE_APPEND);
}
