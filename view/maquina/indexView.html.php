<?php
include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">

<!--  <p>
    <a href="<?php echo config::getUrl() ?>index.php/bdaMaquina/index" class="btn btn-warning">Maquina</a>
  </p>-->


  <h1>CRUD de tabla maquina</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/nuevo" class="btn btn-success">Nuevo</a>

    <script src="<?php echo $fsConfig->getUrl() ?>js/eliminarMasivo.js"></script>
    <a href="javascript:eliminarMasivo()" class="btn btn-danger" id="btnDeleteMasivo">Eliminar Masivo</a> 

    <a class="btn btn-primary" data-toggle="modal" data-target="#myModalFilters">Filtros</a>

    <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/index" class="btn btn-default">Eliminar FIltros</a>
  </p>

  <!--Filtros-->
  <div class="modal fade" id="myModalFilters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Filtros</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="filterForm" role="form" method="POST" action="<?php echo config::getUrl() ?>index.php/bdaMaquina/index">

            <div class="form-group">
              <div class="col-sm-6">
                <label class="col-sm-4 control-label"  for="bdaMaquina[createdAt1]"  >Fecha inicio</label>
                <input type="date" class="form-control" id="createdAt1" name="bdaMaquina[createdAt1]">
              </div>

              <div class="col-sm-6">
                <label class="col-sm-4 control-label"  for="bdaMaquina[createdAt2]"  >Fecha Final</label>
                <input type="date" class="form-control" id="createdAt2" name="bdaMaquina[createdAt2]">
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn btn-xs" data-dismiss="modal">Cancelar</button>
          <button type="button" onclick="$('#filterForm').submit()" class="btn btn-primary btn btn-xs">Filtros</button>
        </div>
      </div>
    </div>
  </div>

  <!-- fin filtro -->

  <form class="form-signin" id="frmDeleteAll" action="<?php echo $fsConfig->getUrl() ?>index.php/maquina/eliminarMasivo" method="POST">  
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
<?php foreach ($objBdaMaquina as $bdaMaquina) : ?>
          <tr>
            <td><input type="checkbox" name="chk[]" value="<?php echo $bdaMaquina->id ?>"></td>
            <td><?php echo $bdaMaquina->id ?></td>
            <td><?php echo $bdaMaquina->estado ?></td>
            <td><?php echo $bdaMaquina->valor ?></td>
            <td><?php echo $bdaMaquina->fecha_compra ?></td>
             <td><?php echo $bdaMaquina->numero_chasis ?></td>
            <td><?php echo $bdaMaquina->created_at ?></td>
            <td><?php echo $bdaMaquina->updated_at ?></td>
            <td><?php echo $bdaMaquina->deleted_at ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/ver?id=<?php echo $bdaMaquina->id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/maquina/editar?id=<?php echo $bdaMaquina->id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a data-toggle="modal" data-target="#myModal<?php echo $bdaMaquina->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
  <?php include $fsConfig->getUrl() . 'view/partial/modalEliminar.php' ?>
            </td>
          </tr>

<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $bdaMaquina->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <a href="javascript:eliminar(<?php echo $bdaMaquina->id ?>,'<?php echo  $fsConfig->getUrl() ?>index.php/maquina/eliminar')" type="button" class="btn btn-danger">Aceptar</a>
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
<script src="<?php echo  $fsConfig->getUrl() ?>js/paginador.js"></script>
    
<div class="text-right">
  paginas <select id="slqPaginador" onchange="paginador(this, '<?php echo  $fsConfig->getUrl() ?>index.php/maquina/index')">
    <?php for ($x = 1; $x <= $cntPages; $x++): ?>
      <option <?php echo (isset($pages) and $pages == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
<?php endfor; ?>
  </select> de <?php echo $cntPages ?>
</div>

