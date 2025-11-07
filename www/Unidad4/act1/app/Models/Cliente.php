<?php

namespace App\Models;

class Cliente
{
    private string $nombre;
    private string $email;

    public function __construct(string $nombre, string $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNombre(string $nombre): void
    {
        $this -> nombre = $nombre;
    }
        public function setEmail(string $email): void
    {
        $this -> email = $email;
    }

    public function __Tostring(){
        return $this-> getNombre() .  " (" . $this-> getEmail() . ")";
    }
}
