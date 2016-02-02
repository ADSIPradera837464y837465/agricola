<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1 class="h1"> ver Tipo Mantenimiento </h1>
  <br>
  <table  class="table table-hover table-striped">
    <thead class="h2">
      <tr>
        <th>identificacion tipo mantenimiento</th>
        <th>descripcion tipo mantenimiento</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $objtipoMantenimiento[0]->tma_id ?></td>       
        <td><?php echo $objtipoMantenimiento[0]->tma_descripcion ?></td>       
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>



