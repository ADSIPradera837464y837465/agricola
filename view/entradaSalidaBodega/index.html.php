<?php
include_once $fsConfig->getPath() . 'view/partial/head.php'
?>
<div class="container container-fluid">
  <h1>Lista </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>
  <div>
    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>
          <th>Id entrada</th>
          <th>Id tercero elb</th>
          <th>Id tercero soli</th>
          <th>Id tipo docu</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objEntradaSalidaBodega as $entradaSalidaBodega) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $entradaSalidaBodega->id ?></td>
            <td><?php echo $entradaSalidaBodega->tercero_id_elabora ?></td>
            <td><?php echo $entradaSalidaBodega->tercero_id_solicita ?></td>
            <td><?php echo $entradaSalidaBodega->tipo_documento_id ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/ver?id=<?php echo $entradaSalidaBodega->id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/editar?id=<?php echo $entradaSalidaBodega->id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a href="#" data-toggle='modal' data-target='#myModal<?php echo $entradaSalidaBodega->id ?>' class="btn btn-danger btn-xs">eliminar</a>
              <?php include $fsConfig->getPath() . 'view/partial/modalEliminarEntradaSalidaBodega.php'; ?>

            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
      
    </table>
    <div>
        <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
    </div>
  </div>
  <script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
  <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
