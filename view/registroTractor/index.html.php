<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>


<div class="container container-fluid">
  <h1>Registro</h1>
  <a href=" <?php config:: getUrl() ?>index.php/registroTractor/Nuevo" class="btn-success">Registrar Nuevo</a>
  <table border="1">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>
        <th>Item del tractor</th>
        <th>Control salida de caña</th>
        <th>hora de salida</th>
        <th>Registro de tractor</th>
        <th>Observacion</th>
        <th>fecha de creacion</th>
        <th>fecha de actualizacion</th>
        <th>fecha de eliminacion</th>
      </tr>
    </thead>
    <tbody>

      <?php if ($objregistroTractor !== false): ?>        
        <?php foreach ($objregistroTractor as $Rtractor) : ?>        
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $Rtractor->csc_id ?></td>           
            <td><?php echo $Rtractor->hora_salida ?></td>
            <td><?php echo $Rtractor->rtr_tractor ?></td>
            <td><?php echo $Rtractor->rtr_observacion ?></td>
            <td><?php echo $Rtractor->der_created_at ?></td>
            <td><?php echo $Rtractor->der_updated_at ?></td>
            <td><?php echo $Rtractor->der_deleted_at?></td>
          </tr>

        <td>
          <a href="<?php echo config::getUrl() ?>index.php/registroTractor/ver?=id = <?php echo $Rtractor->id ?>" class="btn btn-info btn-xs"> Ver </a>
          <a href="<?php echo config::getUrl() ?>index.php/registroTractor/editar?=id = <?php echo $Rtractor->id ?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs"> Editar</a>
          <a href="#" data-toggle="modal" data-target="#myModal <?php echo $Rtractor->id ?> " class="btn btn-info btn-xs"> Eliminar </a>
          <?php include config::getPath() . 'View/partial/modelEliminar.php'; ?>
        </td>


        </tbody>

      <?php endforeach ?>   
    <?php endif; ?>


  </table>
</div>
<script src="<?php echo config::getUrl() ?>js/eliminar.js"></script>
<?php include config::getPath() . 'view/partial/foot.php'; ?>
