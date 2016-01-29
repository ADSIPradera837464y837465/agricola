
<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1 class="h1"> ver Tipo documento </h1>
  <br>
  <table  class="table table-hover table-striped">
      <thead class="h2">
      <tr>
        <th>Descripcion</th>
        <th>Tipo movimiento</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $objTipoDocumento[0]->descripcion ?></td>       
        <td><?php echo $objTipoDocumento[0]->tipo_movimiento ?></td>       
        <td><?php echo $objTipoDocumento[0]->estado ?></td>       
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>


