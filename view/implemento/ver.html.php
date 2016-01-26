
<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1> ver Implemento </h1>
  <br>
  <table  class="table table-hover">
    <thead>
      <tr>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $objImplemento[0]->descripcion ?></td>       
      </tr>
    </tbody>
  </table>
</div>


