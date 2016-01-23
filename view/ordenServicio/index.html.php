<?php include_once $fsConfig - th() . 'view/partial/head.php' ?>


<div class="container container-fluid">
  <h1>Orden servicio</h1>
  <a href=" <?php config:: getUrl() ?>index.php/ordenServicio/nuevo" class="btn-success">Nuevo</a>
  <table border="1">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>
        <th>identificacion orden servicio</th>
        <th>identificacion de la maquina</th>
        <th>identificacion del tipo mantenimiento</th>
        <th>identificacion del tercero elabora</th>
        <th>identificacion del tercero realiza</th>
        <th>orden servicio fecha</th>
        <th>orden servicio observacion</th>
        <th>created</th>
      </tr>
    </thead>
    <tbody>

      <?php if ($objordenServicio !== false): ?>        
        <?php foreach ($objordenServicio as $ordenServicio) : ?>        
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $ordenServicio->ors_id ?></td>           
            <td><?php echo $ordenServicio->maq_id ?></td>
            <td><?php echo $ordenServicio->tma_id ?></td>
            <td><?php echo $ordenServicio->ter_id_elabora ?></td>
            <td><?php echo $ordenServicio->ter_id_realiza ?></td>
            <td><?php echo $ordenServicio->ors_fecha ?></td>
            <td><?php echo $ordenServicio->ors_observacion ?></td>
            <td><?php echo $ordenServicio->ors_created_at ?></td>
          </tr>

        <td>
          <a href="<?php echo config::getUrl() ?>index.php/ordenServicio/ver?=id = <?php echo $ordenServicio->id ?>" class="btn btn-info btn-xs"> Ver </a>
          <a href="<?php echo config::getUrl() ?>index.php/ordenServicio/editar?=id = <?php echo $ordenServicio->id ?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs"> Editar</a>
          <a href="#" data-toggle="modal" data-target="#myModal <?php echo $ordenServicio->id ?> " class="btn btn-info btn-xs"> Eliminar </a>
          <?php include config::getPath() . 'View/partial/modelEliminar.php'; ?>
        </td>


        </tbody>

      <?php endforeach ?>   
    <?php endif; ?>

  </table>
</div>
<script src="<?php echo config::getUrl() ?>js/eliminar.js"></script>
<?php include config::getPath() . 'view/partial/foot.php'; ?>

