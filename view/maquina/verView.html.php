<?php

use azucar\myConfig\myConfig as config; ?>
<?php include_once config::getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  
  <h1>INFORMACION DE <?php echo $objBdaMaquina[0]->maq_estado ?></h1>
 
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>ESTADO</th>
        <th>VALOR </th>
        <th>FECHA DE COMPRA</th>
        <th>NUMERO CHASIS</th>
        <th>TIPO ACCESORIO</th>
        <th>HORAS TRABAJADAS</th>
        <th>TIEMPO MANTENIMIENTO</th>
        <th>NUMERO SERIE</th>
        <th>MODELO</th>
        <th>HORAS ACTIVIDAD</th>
        <th>VALOR HORA</th>
        <th>CREATED_AT</th>
        <th>UPDATED_AT</th>
        <th>DELETED_AT</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($objBdaMaquina as $bdaMaquina) : ?>
        <tr>
          <td><?php echo $bdaMaquina->id ?></td>
          <td><?php echo $bdaMaquina->maq_estado ?></td>
          <td><?php echo $bdaMaquina->maq_valor ?></td>
          <td><?php echo $bdaMaquina->maq_fecha_compra ?></td>
          <td><?php echo $bdaMaquina->maq_numero_chasis ?></td>
          <td><?php echo $bdaMaquina->maq_tipo_accesorio ?></td>
          <td><?php echo $bdaMaquina->maq_horas_trabajadas ?></td>
          <td><?php echo $bdaMaquina->maq_tiempo_mantenimiento_hora ?></td>
          <td><?php echo $bdaMaquina->maq_numero_serie ?></td>
          <td><?php echo $bdaMaquina->maq_modelo ?></td>
          <td><?php echo $bdaMaquina->maq_horas_actividad ?></td>
          <td><?php echo $bdaMaquina->maq_valor_hora ?></td>
          <td><?php echo $bdaMaquina->created_at ?></td>
          <td><?php echo $bdaMaquina->updated_at ?></td>
          <td><?php echo $bdaMaquina->deleted_at ?></td>
          
        </tr>
<?php endforeach; ?>
    </tbody>
  </table>
  <a href="<?php echo config::getUrl() . 'index.php/bdaMaquina/index' ?>" class="btn btn-info">Volver</a>
</div>
<?php include config::getPath() . 'view/partial/foot.php' ?>