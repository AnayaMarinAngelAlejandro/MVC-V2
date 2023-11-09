<?php
require_once("c://xampp/htdocs/proyecto/view/head/head.php");
require_once("c://xampp/htdocs/proyecto/controller/PedidoController.php"); // Asegúrate de que la ruta del controlador sea correcta.
$obj = new PedidoController();
$pedido = $obj->show($_GET['id']);
?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Pedido</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pedido['id'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ID del Cliente</label>
        <div class="col-sm-10">
            <input type="text" name="id_cliente" class="form-control" id="inputPassword" value="<?= $pedido['id_cliente'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Fecha del Pedido</label>
        <div class="col-sm-10">
            <input type="text" name="fecha_pedido" class="form-control" id="inputPassword" value="<?= $pedido['fecha_pedido'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Método de Pago</label>
        <div class="col-sm-10">
            <input type="text" name="metodo_pago" class="form-control" id="inputPassword" value="<?= $pedido['metodo_pago'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Estado del Pedido</label>
        <div class="col-sm-10">
            <input type="text" name="estado_pedido" class="form-control" id="inputPassword" value="<?= $pedido['estado_pedido'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Dirección de Envío</label>
        <div class="col-sm-10">
            <input type="text" name="direccion_envio" class="form-control" id="inputPassword" value="<?= $pedido['direccion_envio'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Costo Total</label>
        <div class="col-sm-10">
            <input type="text" name="costo_total" class="form-control" id="inputPassword" value="<?= $pedido['costo_total'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Observaciones</label>
        <div class="col-sm-10">
            <textarea name="observaciones" class="form-control" id="inputPassword"><?= $pedido['observaciones'] ?></textarea>
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $pedido['id'] ?>">Cancelar</a>
    </div>
</form>
<?php
require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
