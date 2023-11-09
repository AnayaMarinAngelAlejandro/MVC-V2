<?php
require_once("c://xampp/htdocs/proyecto/controller/PedidoController.php"); // Asegúrate de que la ruta del controlador sea correcta.
$obj = new PedidoController();
$obj->delete($_GET['id']);
?>
