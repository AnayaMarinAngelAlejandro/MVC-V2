<?php
require_once("c://xampp/htdocs/proyecto/view/head/head.php");
require_once("C://xampp\htdocs\proyecto\controller\PedidoController.php"); 
$obj = new PedidoController();
$rows = $obj->index();
?>
<h1>WWE, base de datos.</h1>
<h2>Tabla pedidos.</h2>
<H3>Software creado por Alejandro Anaya Marin</H3>
<div class="mb-3">
    <a href="/proyecto/view/username/create.php" class="btn btn-primary">Agregar nuevo pedido</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID del Cliente</th>
            <th scope="col">Fecha del Pedido</th>
            <th scope="col">Método de Pago</th>
            <th scope="col">Estado del Pedido</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows): ?>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['id_cliente'] ?></th>
                    <th><?= $row['fecha_pedido'] ?></th>
                    <th><?= $row['metodo_pago'] ?></th>
                    <th><?= $row['estado_pedido'] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?= $row['id'] ?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php
require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
