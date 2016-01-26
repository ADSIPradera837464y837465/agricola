<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<?php use FStudio\fsController as controller; ?>
  

<div class="container container-fluid">

  <h1>Editar</h1>
  <form class="form-inline" action="<?php echo $fsconfig->getUrl() ?>index.php/ordenServicio/editar" method="post">
    <input type="hidden" name="ordenServicio[ors_id]" value="<?php echo $objordenServicio[0]->ors_id ?>">
    <div class="col-sm-10">
      <input  value="<?php $objordenServicio[0]->ors_id ?>"  type="text" class="form-control" id="ors_id"  name="ordenServicio[ors_id]"placeholder="identificacion orden  servicio">
    </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[maq_id]" value="<?php echo $objordenServicio[0]->maq_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->maq_id ?>"  type="text" class="form-control" id="maq_id"  name="ordenServicio[maq_id]"placeholder=" identificacion de la  maquina ">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[tma_id]" value="<?php echo $objordenServicio[0]->tma_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->tma_id ?>"  type="text" class="form-control" id="tma_id"  name="ordenServicio[tma_id]"placeholder="identificacion del tipo mantenimiento ">
  </div>
</div>


<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[ter_id_elabora]" value="<?php echo $objordenServicio[0]->ter_id_elabora ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->ter_id_elabora ?>"  type="text" class="form-control" id="ter_id_elabora"  name="ordenServicio[ter_id_elabora]"placeholder="identificacion del tercero elabora">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[ter_id_realiza]" value="<?php echo $objordenServicio[0]->ter_id_realiza ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->ter_id_realiza ?>"  type="text" class="form-control" id="ter_id_realiza"  name="ordenServicio[ter_id_realiza]"placeholder="identificacion del tercero realiza">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[ors_fecha]" value="<?php echo $objordenServicio[0]->ors_fecha ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->ors_fecha ?>"  type="text" class="form-control" id="ors_fecha"  name="ordenServicio[ors_fecha]"placeholder="orden servicio fecha">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[ors_observacion]" value="<?php echo $objordenServicio[0]->ors_observacion ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->ors_observacion ?>"  type="text" class="form-control" id="ors_observacion"  name="ordenServicio[ors_observacion]"placeholder="orden servicio observacion">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="ordenServicio[ors_created_at]" value="<?php echo $objordenServicio[0]->ors_created_at ?>">
  <div class="col-sm-10">
    <input  value="<?php $objordenServicio[0]->ors_created_at ?>"  type="text" class="form-control" id="ors_created_at"  name="ordenServicio[ors_created_at]"placeholder="created">
  </div>
</div>


<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Actualizar</button>
  </div>
</div>
</form>
</div>

<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>