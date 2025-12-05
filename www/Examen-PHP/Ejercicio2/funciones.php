<?php

declare(strict_types=1);

function iniciarPartida(): void
{
    if (!isset($_SESSION['numero']) || !isset($_SESSION['intentos'])) {
        reiniciarPartida();
    }
}

function reiniciarPartida(): void
{
    $_SESSION['numero'] = random_int(1, 10);
    $_SESSION['intentos'] = 0;
}

function procesarIntento(?string $valor): array
{
    if ($valor === null || $valor === '') {
        return [
            'mensaje' => 'Debes introducir un número para jugar.',
            'tipo' => 'warning',
        ];
    }

    if (!filter_var($valor, FILTER_VALIDATE_INT)) {
        return [
            'mensaje' => 'El valor introducido no es un número válido.',
            'tipo' => 'warning',
        ];
    }

    $numero = (int) $valor;
    if ($numero < 1 || $numero > 10) {
        return [
            'mensaje' => 'El número debe estar entre 1 y 10. No cuenta como intento.',
            'tipo' => 'warning',
        ];
    }

    $_SESSION['intentos']++;

    if ($numero === $_SESSION['numero']) {
        $intentos = $_SESSION['intentos'];
        reiniciarPartida();

        return [
            'mensaje' => sprintf('¡Correcto! Has acertado en %d intento(s). Se ha iniciado una nueva partida.', $intentos),
            'tipo' => 'success',
        ];
    }

    $pista = $numero < $_SESSION['numero'] ? 'mayor' : 'menor';

    return [
        'mensaje' => 'No es correcto. El número secreto es ' . $pista . '.',
        'tipo' => 'info',
    ];
}
