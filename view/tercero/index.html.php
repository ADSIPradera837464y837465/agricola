<?php use azucar\myConfig\myConfig as config ?>
<?php include_once config::getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>CRUD de la tabla PERSONA</h1>
  <p>
    <a href="<?php echo config::getUrl() ?>index.php/persona/nuevo" class="btn btn-success">Nuevo</a>
  </p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>usuario</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($objPersona as $persona):?>
      <tr>
        <td><?php echo $persona->id?></td>
        <td><?php echo $persona->usuario?></td>
        <td><?php echo $persona->nombre?></td>
        <td><?php echo $persona->apellido?></td>
        <td>
          <a href="<?php echo config::getUrl() ?>index.php/persona/ver?id=<?php echo $persona->id ?>" class="btn btn-warning btn-xs">Ver</a>
          <a href="<?php echo config::getUrl() ?>index.php/persona/editar?id=<?php echo $persona->id ?>" class="btn btn-primary btn-xs">Editar</a>
          <a href="#" data-toggle="modal" data-target="#myModal<?php echo $persona->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
          <?php include config::getPath() . 'view/partial/modalEliminar.php' ?>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
    <tfoot>
      
    </tfoot>
  </table>
</div>
<script src="<?php echo config::getUrl() ?>js/eliminar.js"></script>
<?php include_once config::getPath() . 'view/partial/foot.php' ?>