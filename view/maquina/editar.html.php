
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>

<?php 
use FStudio\fsController as controller;
?>


<div class="container container-fluid">
  <h1>Modificar Maquina</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/maquina/actualizar" method="POST">

    <input type="hidden" name="maquina[id]" value="<?php echo $objMaquina[0]->id ?>">
    <div class="form-group">



      <div class="form-group">
        <label for="maqEstado" class="col-sm-2 control-label">Estado</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqEstado" name="maquina[maqEstado]"  value="<?php echo $objMaquina[0]->estado ?>" placeholder="Estado">
        </div>
      </div>

      <div class="form-group">
        <label for="maqValor" class="col-sm-2 control-label">Valor</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqValor" name="maquina[maqValor]" value="<?php echo $objMaquina[0]->valor ?>" placeholder="Valor">
        </div>
      </div>

      <div class="form-group">
        <label for="maqFechaCompra" class="col-sm-2 control-label">Fecha Compra</label>
        <div class="col-sm-10">
          <input type="date(d,m,Y)" class="form-control" id="maqFechaCompra" name="maquina[maqFechaCompra]"  value="<?php echo $objMaquina[0]->fecha_compra ?>" placeholder="Fecha Compra">
        </div>
      </div>

      <div class="form-group">
        <label for="maqNumeroChasis" class="col-sm-2 control-label">Numero Chasis</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqNumeroChasis" name="maquina[maqNumeroChasis]" value="<?php echo $objMaquina[0]->numero_chasis ?>" placeholder="Numero Chasis">
        </div>
      </div>

      <div class="form-group">
        <label for="maqTipoAccesorio" class="col-sm-2 control-label">Tipo Accesorio</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqTipoAccesorio" name="maquina[maqTipoAccesorio]" value="<?php echo $objMaquina[0]->tipo_accesorio ?>" placeholder="Tipo Accesorio">
        </div>
      </div>

      <div class="form-group">
        <label for="maqHorasTrabajadas" class="col-sm-2 control-label">Horas Trabajadas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqHorasTrabajadas" name="maquina[maqHorasTrabajadas]" value="<?php echo $objMaquina[0]->horas_trabajadas ?>" placeholder="Horas Trabajadas">
        </div>
      </div>

      <div class="form-group">
        <label for="maqTiempoMantenimientoHora" class="col-sm-2 control-label">Tiempo Mantenimiento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqTiempoMantenimientoHora" name="maquina[maqTiempoMantenimientoHora]" value="<?php echo $objMaquina[0]->tiempo_mantenimiento_hora ?>" placeholder="Tiempo Mantenimiento">
        </div>
      </div>

      <div class="form-group">
        <label for="maqNumeroSerie" class="col-sm-2 control-label">Numero Serie</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqNumeroSerie" name="maquina[maqNumeroSerie]" value="<?php echo $objMaquina[0]->numero_serie ?>" placeholder="Numero Serie">
        </div>
      </div>

      <div class="form-group">
        <label for="maqModelo" class="col-sm-2 control-label">Modelo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqModelo" name="maquina[maqModelo]" value="<?php echo $objMaquina[0]->modelo ?>" placeholder="Modelo">
        </div>
      </div>

      <div class="form-group">
        <label for="maqHorasActividad" class="col-sm-2 control-label">Horas Actividad</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqHorasActividad" name="maquina[maqHorasActividad]" value="<?php echo $objMaquina[0]->horas_actividad ?>" placeholder="Horas Actividad">
        </div>
      </div>

      <div class="form-group">
        <label for="maqValorHora" class="col-sm-2 control-label">Valor Hora</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maqValorHora" name="maquina[maqValorHora]" value="<?php echo $objMaquina[0]->valor_hora ?>" placeholder="Valor Hora">
        </div>
      </div>



      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Modificar</button>
        </div>
      </div>
  </form>
</div>
<?php include $fsConfig->getPath() . 'view/partial/foot.php' ?>
