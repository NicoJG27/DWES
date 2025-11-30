<?php

class VoteController
{
    private $model;

    public function __construct(optionModel $model)
    {
        $this->model = $model;
    }

    public function ejecutar()
    {
        // 1. GESTIÓN DE PETICIONES (POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // CORRECCIÓN: Ahora buscamos 'voto' (el radio button de tu vista)
            if (isset($_POST['voto'])) {
                $this->model->votar($_POST['voto']);
            }

            // CORRECCIÓN: Ahora buscamos 'eliminar' (el botón rojo de tu vista)
            if (isset($_POST['eliminar'])) {
                $this->model->eliminar($_POST['eliminar']);
            }

            // CORRECCIÓN: Ahora buscamos 'texto' (el input de agregar de tu vista)
            if (isset($_POST['texto']) && !empty($_POST['texto'])) {
                $this->model->agregarOpcion($_POST['texto']);
            }
        }

        // 2. Obtener datos
        $listaOpciones = $this->model->obtenerOpciones();

        // 3. Calcular total
        $totalVotos = 0;
        if ($listaOpciones) {
            foreach ($listaOpciones as $opcion) {
                $totalVotos += $opcion['votos'];
            }
        }

        // 4. Devolver datos
        return [
            'opciones' => $listaOpciones,
            'total'    => $totalVotos
        ];
    }
}
?>