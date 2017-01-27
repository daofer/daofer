<?php
    require_once("../modelo/modelo.php");
    $menu = new Platillo();
    $pd = $menu->login();
    require_once("../vista/vista.php");
?>

