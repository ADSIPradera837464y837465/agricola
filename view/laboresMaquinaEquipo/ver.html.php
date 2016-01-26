
<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1> ver labores maquina equipo </h1>
  <br>
  <table  class="table table-hover">
    <thead>
      <tr>
        <th>hacienda_id</th>
        <th>tercero_id</th>
        <th>tipo_documento_id</th>
        <th>implemento_id</th>
        <th>fecha</th>
        <th>estado</th>
        <th>tiempo</th>
        <th>total_horas_trabajadas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $objLaboresMaquinaEquipo[0]->hacienda_id ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->tercero_id ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->tipo_documento_id ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->implemento_id ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->fecha ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->estado ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->tiempo ?></td>       
        <td><?php echo $objLaboresMaquinaEquipo[0]->total_horas_trabajadas ?></td>       
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>


