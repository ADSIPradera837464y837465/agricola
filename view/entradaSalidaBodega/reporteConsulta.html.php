<?php
include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>reporte  </h1>
<!--//-->
  
    <form id="form1" action="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/reporte" method="post">
      <input type="date" id="fecha1" name="echa1"/> and <input type="date" id="fecha2" id="fecha2"></a>
    <button type="submit">ver entre </button>
  </form>
 
    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>
      
          <th>Id  entrada salida bodega</th>
          <th>tercero elabora id</th>
          <td>tercero solicita id</td>
          <td>Tipo documento id</td>
          <td>fecha</td>
          <td>observaciones</td>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($objEntradaSalidaBodega as $entradaSalidaBodega) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $entradaSalidaBodega->id ?></td>
               <td><?php echo $entradaSalidaBodega->tercero_id_elabora ?></td>
            <td><?php echo $entradaSalidaBodega->tercero_id_solicita ?></td>
            <td><?php echo $entradaSalidaBodega->tipo_documento_id ?>
            </td>   <td><?php echo $entradaSalidaBodega->fecha ?></td>
            <td><?php echo $entradaSalidaBodega->observacion ?></td>
            <?php endforeach ?>
      </tbody>
    </table>
    <div>
        <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
    </div>
</div>
