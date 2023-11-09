<?php
class PedidoController{
    private $model;
    public function __construct()
    {
        require_once("c://xampp/htdocs/proyecto/model/PedidoModel.php"); 
        $this->model = new PedidoModel();
    }
    public function guardar($id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones){
        $id = $this->model->insertar($id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones);
        return ($id != false) ? header("Location: show.php?id=" . $id) : header("Location: create.php");
    }
    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location: index.php");
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones){
        return ($this->model->update($id, $id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones) != false) ? header("Location: show.php?id=" . $id) : header("Location: index.php");
    }
    public function delete($id){
        return ($this->model->delete($id)) ? header("Location: index.php") : header("Location: show.php?id=" . $id);
    }
}
?>
