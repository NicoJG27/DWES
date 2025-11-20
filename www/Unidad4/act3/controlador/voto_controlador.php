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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (isset($_POST['nueva_opcion']) && !empty($_POST['texto_opcion'])) {
                $this->model->agregarOpcion($_POST['texto_opcion']);
            }

            if (isset($_POST['votar_id'])) {
                $this->model->votar($_POST['votar_id']);
            }

            if (isset($_POST['eliminar_id'])) {
                $this->model->eliminar($_POST['eliminar_id']);
            }
        }

        $listaOpciones = $this->model->obtenerOpciones();

        $totalVotos = 0;
        if ($listaOpciones) {
            foreach ($listaOpciones as $opcion) {
                $totalVotos += $opcion['votos'];
            }
        }

        return [
            'opciones' => $listaOpciones,
            'total'    => $totalVotos
        ];
    }
}
?>