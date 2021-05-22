<?php
class SesionClass
{
    function __construct()
    {
        session_start();
    }
    
    public function setSesion($nombre,$valor)
    {
        $_SESSION[$nombre] = $valor;
    }
    
    public function getSesion($nombre)
    {
        if (isset($_SESSION[$nombre])) 
        {
            return $_SESSION[$nombre];
        } 
        else 
        {
            return false;
        }
    }
    
    public function delSesion($nombre)
    {
        unset($_SESSION[$nombre]);
    }
    
    public function finSesion()
    {
        $_SESSION = [];
        session_destroy();
    }
}
