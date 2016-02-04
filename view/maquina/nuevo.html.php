
<?php include $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Nuevo Maquina</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/maquina/crear" method="POST">
    
    
    <div class="form-group">
    <label for="maqEstado" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqEstado" name="maquina[maqEstado]" placeholder="Estado">
    </div>
  </div>
    
  <div class="form-group">
    <label for="maqValor" class="col-sm-2 control-label">Valor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqValor" name="maquina[maqValor]" placeholder="Valor">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqValor" class="col-sm-2 control-label">Fecha Compra</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="maqFechaCompra" name="maquina[maqValor]" placeholder="Fecha Compra">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqNumeroChasis" class="col-sm-2 control-label">Numero Chasis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqNumeroChasis" name="maquina[maqNumeroChasis]" placeholder="Numero Chasis">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqTipoAccesorio" class="col-sm-2 control-label">Tipo Accesorio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqTipoAccesorio" name="maquina[maqTipoAccesorio]" placeholder="Tipo Accesorio">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqHorasTrabajadas" class="col-sm-2 control-label">Horas Trabajadas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqHorasTrabajadas" name="maquina[maqHorasTrabajadas]" placeholder="Horas Trabajadas">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqTiempoMantenimientoHora" class="col-sm-2 control-label">Tiempo Mantenimiento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqTiempoMantenimientoHora" name="maquina[maqTiempoMantenimientoHora]" placeholder="Tiempo Mantenimiento">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqNumeroSerie" class="col-sm-2 control-label">Numero Serie</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqNumeroSerie" name="maquina[maqNumeroSerie]" placeholder="Numero Serie">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqModelo" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqModelo" name="maquina[maqModelo]" placeholder="Modelo">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqHorasActividad" class="col-sm-2 control-label">Horas Actividad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqHorasActividad" name="maquina[maqHorasActividad]" placeholder="Horas Actividad">
    </div>
  </div>
    
    <div class="form-group">
    <label for="maqValorHora" class="col-sm-2 control-label">Valor Hora</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqValorHora" name="maquina[maqValorHora]" placeholder="Valor Hora">
    </div>
  </div>
    
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Registrar</button>
      </div>
    </div>
  </form>
</div>
<?php include $fsConfig->getPath() . 'view/partial/foot.php' ?>
