<?php

function categoria(int $num): string {
    if ($num >= 0 && $num <= 39) {
        return "bajo";
    } elseif ($num >= 40 && $num <= 69) {
        return "medio";
    } else {
        return "alto";
    }
}

function escribir(array $nums): void {
    $fichero = fopen("salida.log", "a");

    foreach ($nums as $n) {
        $cat = categoria($n);
        $fecha = date("d.m.Y");
        fwrite($fichero, "$fecha El número $n pertenece a la categoría $cat\n");
    }

    fclose($fichero);
}