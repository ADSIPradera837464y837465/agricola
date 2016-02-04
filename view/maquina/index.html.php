<?php
include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">


  <h1>CRUD de tabla maquina</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/nuevo" class="btn btn-success">Nuevo</a>


    <table class="table">
      <thead>
        <tr>
          <th><input type="checkbox" id="chkAll"></th>
          <th>ID</th>
          <th>ESTADO</th>
          <th>VALOR </th>
          <th>FECHA DE COMPRA</th>
          <th>CREATED_AT</th>
          <th>UPDATED_AT</th>
          <th>DELETED_AT</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
<?php foreach ($objMaquina as $maquina) : ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $maquina->id ?>"></td>
            <td><?php echo $maquina->id ?></td>
            <td><?php echo $maquina->estado ?></td>
            <td><?php echo $maquina->valor ?></td>
            <td><?php echo $maquina->fecha_compra ?></td>
             <td><?php echo $maquina->numero_chasis ?></td>
            <td><?php echo $maquina->created_at ?></td>
            <td><?php echo $maquina->updated_at ?></td>
            <td><?php echo $maquina->deleted_at ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/ver?id=<?php echo $maquina->id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/editar?id=<?php echo $maquina->id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a data-toggle="modal" data-target="#myModal<?php echo $maquina->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
  <?php include $fsConfig->getUrl() . 'view/partial/modalEliminar.php' ?>
            </td>
          </tr>

<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $maquina->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar Eliminacion</h4>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro Seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <a href="javascript:eliminar(<?php echo $maquina->id ?>,'<?php echo  $fsConfig->getUrl() ?>index.php/maquina/eliminar')" type="button" class="btn btn-danger">Aceptar</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
      </tbody>
    </table>
  </form>
</div>


<!-- modal de eliminar masivo ------------------------>
<div class="modal fade" id="myModalDeleteMasivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">eliminar en masa </h4>
      </div>
      <div class="modal-body">
        eliminar elementos seleccionados
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">cerrar</button>
        <button type="button" class="btn btn-danger btn-xs" onclick="$('#frmDeleteAll').submit()">eliminar</button>
      </div>
    </div>
  </div>
</div>

<!------------paginador---------------->
