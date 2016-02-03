<?php use azucar\myConfig\myConfig as config ?>
<?php include config::getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Modificar Maquina</h1>
  <form class="form-horizontal" action="<?php echo config::getUrl() ?>index.php/bdaMaquina/actualizar" method="POST">
    
    <input type="hidden" name="bdaMaquina[id]" value="<?php echo $objBdaMaquina[0]->id?>">
    <div class="form-group">
      
     
    
 <div class="form-group">
    <label for="estado" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqEstado" name="bdaMaquina[maqEstado]"  value="<?php echo $objBdaMaquina[0]->maq_estado?>" placeholder="Estado">
    </div>
  </div>
    
  <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Valor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqValor" name="bdaMaquina[maqValor]" value="<?php echo $objBdaMaquina[0]->maq_valor?>" placeholder="Valor">
    </div>
  </div>
    
    <div class="form-group">
    <label for="fechaCompra" class="col-sm-2 control-label">Fecha Compra</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="maqFechaCompra" name="bdaMaquina[maqFechaCompra]"  value="<?php echo $objBdaMaquina[0]->maq_fecha_compra?>" placeholder="Fecha Compra">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Numero Chasis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqNumeroChasis" name="bdaMaquina[maqNumeroChasis]" value="<?php echo $objBdaMaquina[0]->maq_numero_chasis?>" placeholder="Numero Chasis">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Tipo Accesorio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqTipoAccesorio" name="bdaMaquina[maqTipoAccesorio]" value="<?php echo $objBdaMaquina[0]->maq_tipo_accesorio?>" placeholder="Tipo Accesorio">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Horas Trabajadas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqHorasTrabajadas" name="bdaMaquina[maqHorasTrabajadas]" value="<?php echo $objBdaMaquina[0]->maq_horas_trabajadas?>" placeholder="Horas Trabajadas">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Tiempo Mantenimiento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqTiempoMantenimientoHora" name="bdaMaquina[maqTiempoMantenimientoHora]" value="<?php echo $objBdaMaquina[0]->maq_tiempo_mantenimiento_hora?>" placeholder="Tiempo Mantenimiento">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Numero Serie</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqNumeroSerie" name="bdaMaquina[maqNumeroSerie]" value="<?php echo $objBdaMaquina[0]->maq_numero_serie?>" placeholder="Numero Serie">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqModelo" name="bdaMaquina[maqModelo]" value="<?php echo $objBdaMaquina[0]->maq_modelo?>" placeholder="Modelo">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Horas Actividad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqHorasActividad" name="bdaMaquina[maqHorasActividad]" value="<?php echo $objBdaMaquina[0]->maq_horas_actividad?>" placeholder="Horas Actividad">
    </div>
  </div>
    
    <div class="form-group">
    <label for="valor" class="col-sm-2 control-label">Valor Hora</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="maqValorHora" name="bdaMaquina[maqValorHora]" value="<?php echo $objBdaMaquina[0]->maq_valor_hora?>" placeholder="Valor Hora">
    </div>
  </div>
    
    
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Modificar</button>
      </div>
    </div>
  </form>
</div>
<?php include config::getPath() . 'view/partial/foot.php' ?>
