<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<?php

use FStudio\fsController as controller; ?>



<div class="container container-fluid">

  <h1>Editar Registro</h1>
  <form class="form-inline" action="<?php echo $fsconfig->getUrl() ?>index.php/registroTractor/editar" method="post">
    <input type="hidden" name="registroTractor[csc_id]" value="<?php echo $objregistroTractor[0]->csc_id ?>">
    <div class="col-sm-10">
      <input  value="<?php $objregistroTractor[0]->csc_id ?>"  type="text" class="form-control" id="csc_id"  name="registroTractor[csc_id]"placeholder="Registro del tractor">
    </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="registroTractor[hora_salida]" value="<?php echo $objregistroTractor[0]->hora_salida ?>">
  <div class="col-sm-10">
    <input  value="<?php $objregistroTractor[0]->hora_salida ?>"  type="text" class="form-control" id="hora_salida"  name="registroTractor[hora_salida]"placeholder=" Hora de salida">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="registroTractor[rtr_tractor]" value="<?php echo $objregistroTractor[0]->rtr_tractor?>">
  <div class="col-sm-10">
    <input  value="<?php $objregistroTractor[0]->rtr_tractor ?>"  type="text" class="form-control" id="rtr_tractor"  name="registroTractor[rtr_tractor]"placeholder=" Registro de tractor ">
  </div>
</div>


<div class="form-group" class="modificar">
  <input type="hidden" name="registroTractor[rtr_observacion]" value="<?php echo $objregistroTractor[0]->rtr_observacion ?>">
  <div class="col-sm-10">
    <input  value="<?php $objregistroTractor[0]->rtr_observacion ?>"  type="text" class="form-control" id="rtr_observacion"  name="registroTractor[rtr_observacion]"placeholder="Observaciones">
  </div>
</div>


<div class="form-group" class="modificar">
  <input type="hidden" name="registroTractor[der_created_at]" value="<?php echo $objregistroTractor[0]->der_created_at ?>">
  <div class="col-sm-10">
    <input  value="<?php $objregistroTractor[0]->der_created_at ?>"  type="text" class="form-control" id="der_created_at"  name="registroTractor[der_created_at]"placeholder=" fecha de creacion ">
  </div>
</div>


<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default"> Editar </button>
  </div>
</div>
</form>

</div>

<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>