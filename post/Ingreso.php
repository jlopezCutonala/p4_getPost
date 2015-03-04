<?php
class Ingreso
{
    private $usuario;
    private $contrasena;

    public function Ingreso()
    {
        $this->usuario = 'root';
        $this->contrasena = 'admin';
    }

    public function evaluar($login, $contrasena)
    {
        return ($login==$this->usuario && $contrasena==$this->contrasena);
    }
}
