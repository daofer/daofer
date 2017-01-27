<?php
class Platillo
{
    private $usuario;
    private $dbh;
 
    public function __construct()
    {
        $this->usuario = array();
        $this->dbh = new mysqli("localhost", "root", "", "restaurante");
    }
 
    private function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
 
    public function login()
    {
        self::set_names();
        $sql="select *from usuario where usuario='".$_POST["usuario"]."' and clave='".$_POST["clave"]."' ";
        foreach ($this->dbh->query($sql) as $res)
        {
            $this->usuario[]=$res;
        }
        return $this->usuario;
        $this->dbh=null;
    }
}
?>

