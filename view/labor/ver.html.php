
<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<div class="container container-fluid">
  <div><h1 class="h1"> ver Implemento </h1>
  <br>
  <table  class="table table-hover table-striped">
    <thead>
      <tr>
        <th class="h2">Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $objImplemento[0]->descripcion ?></td>       
      </tr>
    </tbody>
  </table>
</div>


