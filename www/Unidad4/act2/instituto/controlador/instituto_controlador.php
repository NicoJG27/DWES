<?php
class InstitutoControlador
{
    private CursoModelo $curso;
    private EstudianteModelo $estudiante;


    public function __construct(CursoModelo $curso, EstudianteModelo $estudiante)
    {
        $this->curso = $curso;
        $this->estudiante = $estudiante;
    }

    public function ejecutar()
    {
        $this->estudiante->vaciarTodo();
        $this->curso->vaciarTodo();

        $idCursoCiber = $this->curso->agregar('Ciberseguridad');
        $idCursoProg = $this->curso->agregar('Programacion');

        $cursos = $this->curso->todos();

        $this->estudiante->agregar('Ana Pérez', 20, $idCursoCiber);
        $this->estudiante->agregar('Luis Gómez', 22, $idCursoProg);

        $listaInicial = $this->estudiante->conCurso();

        $this->estudiante->actualizarPorNombre('Ana Pérez', 'Ana Torres', 21, $idCursoProg);

        $listaModificada = $this->estudiante->conCurso();

        $this->estudiante->eliminarPorNombre('Luis Gómez');

        $listaFinal = $this->estudiante->conCurso();
        return
            [
                'cursos' => $cursos, // array de Cursos
                'listaInicial' => $listaInicial, // array con datos iniciales.
                'listaModificada' => $listaModificada,  // array con los datos modificados
                'listaFinal' => $listaFinal // array con los datos finales ( estudiante elminado )
            ];
    }
}
