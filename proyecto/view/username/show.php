<?php
require_once("c://xampp/htdocs/proyecto/view/head/head.php");
require_once("c://xampp/htdocs/proyecto/controller/PedidoController.php"); // Asegúrate de que la ruta del controlador sea correcta.
$obj = new PedidoController();
$pedido = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del Pedido</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $pedido['id'] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $pedido['id'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID del Cliente</th>
            <th scope="col">Fecha del Pedido</th>
            <th scope="col">Método de Pago</th>
            <th scope="col">Estado del Pedido</th>
            <th scope="col">Dirección de Envío</th>
            <th scope="col">Costo Total</th>
            <th scope="col">Observaciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $pedido['id'] ?></td>
            <td scope="col"><?= $pedido['id_cliente'] ?></td>
            <td scope="col"><?= $pedido['fecha_pedido'] ?></td>
            <td scope="col"><?= $pedido['metodo_pago'] ?></td>
            <td scope="col"><?= $pedido['estado_pedido'] ?></td>
            <td scope="col"><?= $pedido['direccion_envio'] ?></td>
            <td scope="col"><?= $pedido['costo_total'] ?></td>
            <td scope="col"><?= $pedido['observaciones'] ?></td>
        </tr>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
