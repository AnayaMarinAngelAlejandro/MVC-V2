<?php
class PedidoModel{
    private $PDO;
    public function __construct()
    {
        require_once("c://xampp/htdocs/proyecto/config/db.php"); // Asegúrate de que la ruta al archivo de configuración de la base de datos sea correcta.
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function insertar($id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones){
        $stament = $this->PDO->prepare("INSERT INTO tbl_pedidos (id_cliente, fecha_pedido, metodo_pago, estado_pedido, direccion_envio, costo_total, observaciones) VALUES (:id_cliente, :fecha_pedido, :metodo_pago, :estado_pedido, :direccion_envio, :costo_total, :observaciones)");
        $stament->bindParam(":id_cliente", $id_cliente);
        $stament->bindParam(":fecha_pedido", $fecha_pedido);
        $stament->bindParam(":metodo_pago", $metodo_pago);
        $stament->bindParam(":estado_pedido", $estado_pedido);
        $stament->bindParam(":direccion_envio", $direccion_envio);
        $stament->bindParam(":costo_total", $costo_total);
        $stament->bindParam(":observaciones", $observaciones);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM tbl_pedidos WHERE id = :id LIMIT 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM tbl_pedidos");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($id, $id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones){
        $stament = $this->PDO->prepare("UPDATE tbl_pedidos SET id_cliente = :id_cliente, fecha_pedido = :fecha_pedido, metodo_pago = :metodo_pago, estado_pedido = :estado_pedido, direccion_envio = :direccion_envio, costo_total = :costo_total, observaciones = :observaciones WHERE id = :id");
        $stament->bindParam(":id_cliente", $id_cliente);
        $stament->bindParam(":fecha_pedido", $fecha_pedido);
        $stament->bindParam(":metodo_pago", $metodo_pago);
        $stament->bindParam(":estado_pedido", $estado_pedido);
        $stament->bindParam(":direccion_envio", $direccion_envio);
        $stament->bindParam(":costo_total", $costo_total);
        $stament->bindParam(":observaciones", $observaciones);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $id : false;
    }
    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM tbl_pedidos WHERE id = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true : false;
    }
}
?>
