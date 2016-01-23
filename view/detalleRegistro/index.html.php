<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>


<div class="container container-fluid">
  <h1>Registro</h1>
  <a href=" <?php config:: getUrl() ?>index.php/detalleRegistro/Nuevo" class="btn-success">Registrar Nuevo</a>
  <table border="1">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>
        <th>Numero</th>
        <th>identificacion de empleado</th>
        <th>numero de labor</th>
        <th>numero de suerte</th>
        <th>numero de producto</th>
        <th>unidad de medida</th>
        <th>identificacion de la maquina</th>
        <th>tiempo muerto</th>
        <th>total horas trabajadas</th>
        <th>hora de inicio</th>
        <th>hora fin</th>
        <th>fecha de creacion</th>
      </tr>
    </thead>
    <tbody>

      <?php if ($objdetalleRegistro !== false): ?>        
        <?php foreach ($objdetalleRegistro as $dtRegistro) : ?>        
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $dtRegistro->relme_numero ?></td>           
            <td><?php echo $dtRegistro->ter_id ?></td>
            <td><?php echo $dtRegistro->lab_id ?></td>
            <td><?php echo $dtRegistro->sue_id ?></td>
            <td><?php echo $dtRegistro->pro_id ?></td>
            <td><?php echo $dtRegistro->unm_id ?></td>
            <td><?php echo $dtRegistro->maq_id ?></td>
            <td><?php echo $dtRegistro->der_tiempo_muerto ?></td>
            <td><?php echo $dtRegistro->der_total_horas_trabajadas ?></td>
            <td><?php echo $dtRegistro->der_hora_inicio ?></td>
            <td><?php echo $dtRegistro->der_hora_fin ?></td>
            <td><?php echo $dtRegistro->der_created_at ?></td>

          </tr>

        <td>
          <a href="<?php echo config::getUrl() ?>index.php/detalleRegistro/ver?=id = <?php echo $dtRegistro->id ?>" class="btn btn-info btn-xs"> Ver </a>
          <a href="<?php echo config::getUrl() ?>index.php/detalleRegistro/editar?=id = <?php echo $dtRegistro->id ?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs"> Editar</a>
          <a href="#" data-toggle="modal" data-target="#myModal <?php echo $dtRegistro->id ?> " class="btn btn-info btn-xs"> Eliminar </a>
          <?php include config::getPath() . 'View/partial/modelEliminar.php'; ?>
        </td>


        </tbody>

      <?php endforeach ?>   
    <?php endif; ?>


  </table>
</div>
<script src="<?php echo config::getUrl() ?>js/eliminar.js"></script>
<?php include config::getPath() . 'view/partial/foot.php'; ?>
