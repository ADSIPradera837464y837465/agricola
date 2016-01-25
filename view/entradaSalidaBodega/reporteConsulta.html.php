<?php
include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>reporte  </h1>

  <p>
    <label>Ver reporte entre:</label>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/index" class="btn btn-default"><input type="date" /> and <input type="date"></a>
<!--  //SELECT  id_reporte,nombre_reporte FROM  REPORTES  WHERE  fecha_reporte BETWEEN '2013-08-01'  AND '2013-08-31' ;-->
  </p>
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
