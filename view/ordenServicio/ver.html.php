<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1 class="h1"> ver Orden Servicio </h1>
  <br>
  <table  class="table table-hover table-striped">
    <thead class="h2">
      <tr>
        <th>identificacion orden servicio</th>
        <th>identificacion de la maquina</th>
        <th>identificacion del tipo mantenimiento</th>
        <th>identificacion del tercero elabora</th>
        <th>identificacion del tercero realiza</th>
        <th>orden servicio fecha</th>
        <th>orden servicio observacion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $objordenServicio[0]->ors_id ?></td> 
        <td><?php echo $objordenServicio[0]->maq_id ?></td>       
        <td><?php echo $objordenServicio[0]->tma_id ?></td>       
        <td><?php echo $objordenServicio[0]->ter_id_elabora ?></td>       
        <td><?php echo $objordenServicio[0]->ter_id_realiza ?></td>       
        <td><?php echo $objordenServicio[0]->ors_fecha ?></td>       
        <td><?php echo $objordenServicio[0]->ors_observacion ?></td>       
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>


