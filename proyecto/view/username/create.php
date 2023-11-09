<?php
require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="id_cliente" class="form-label">ID del cliente</label>
        <input type="text" name="id_cliente" required class="form-control" id="id_cliente" aria-describedby="id_cliente">
    </div>
    <div class="mb-3">
        <label for="fecha_pedido" class="form-label">Fecha del pedido</label>
        <input type="date" id="fecha_pedido" name="fecha_pedido" value="<?php echo date("Y-m-d");?>">
    </div>
    <div class="mb-3">
        <label for="metodo_pago" class="form-label">Método de pago</label>
        <input type="text" name="metodo_pago" required class="form-control" id="metodo_pago">
    </div>
    <div class="mb-3">
        <label for="estado_pedido" class="form-label">Estado del pedido</label>
        <input type="text" name="estado_pedido" required class="form-control" id="estado_pedido">
    </div>
    <div class="mb-3">
        <label for="direccion_envio" class="form-label">Dirección de envío</label>
        <input type="text" name="direccion_envio" required class="form-control" id="direccion_envio">
    </div>
    <div class="mb-3">
        <label for="costo_total" class="form-label">Costo total</label>
        <input type="text" name="costo_total" required class="form-control" id="costo_total">
    </div>
    <div class="mb-3">
        <label for="observaciones" class="form-label">Observaciones</label>
        <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php
require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
