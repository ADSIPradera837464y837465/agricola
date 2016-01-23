<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<?php

use FStudio\fsController as controller; ?>


<div class="container container-fluid">

  <h1>Editar Registro</h1>
  <form class="form-inline" action="<?php echo $fsconfig->getUrl() ?>index.php/detalleRegistro/editar" method="post">
    <input type="hidden" name="detalleRegistro[relme_numero]" value="<?php echo $objdetalleRegistro[0]->relme_numero ?>">
    <div class="col-sm-10">
      <input  value="<?php $objdetalleRegistro[0]->relme_numero ?>"  type="text" class="form-control" id="relme_numeroraza"  name="detalleRegistro[relme_numero]"placeholder="numero de registro">
    </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[ter_id]" value="<?php echo $objdetalleRegistro[0]->ter_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->ter_id ?>"  type="text" class="form-control" id="ter_id"  name="detalleRegistro[ter_id]"placeholder=" identificacion del  empleado ">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[lab_id]" value="<?php echo $objdetalleRegistro[0]->lab_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->lab_id ?>"  type="text" class="form-control" id="lab_id"  name="detalleRegistro[lab_id]"placeholder=" labores ">
  </div>
</div>


<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[sue_id]" value="<?php echo $objdetalleRegistro[0]->sue_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->sue_id ?>"  type="text" class="form-control" id="sue_id"  name="detalleRegistro[sue_id]"placeholder="numero de suerte">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[pro_id]" value="<?php echo $objdetalleRegistro[0]->pro_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->pro_id ?>"  type="text" class="form-control" id="pro_id"  name="detalleRegistro[pro_id]"placeholder="identificacion de producto">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[unm_id]" value="<?php echo $objdetalleRegistro[0]->unm_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->unm_id ?>"  type="text" class="form-control" id="unm_id"  name="detalleRegistro[unm_id]"placeholder="unidad de medida">
  </div>
</div>


<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[maq_id]" value="<?php echo $objdetalleRegistro[0]->maq_id ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->maq_id ?>"  type="text" class="form-control" id="maq_id "  name="detalleRegistro[maq_id ]"placeholder=" identificacion de la maquina">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[der_tiempo_muerto]" value="<?php echo $objdetalleRegistro[0]->der_tiempo_muerto ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->der_tiempo_muerto ?>"  type="text" class="form-control" id="der_tiempo_muerto"  name="detalleRegistro[der_tiempo_muerto ]"placeholder=" Tiempo muerto">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[der_total_horas_trabajadas]" value="<?php echo $objdetalleRegistro[0]->der_total_horas_trabajadas ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->der_total_horas_trabajadas ?>"  type="text" class="form-control" id="der_total_horas_trabajadas"  name="detalleRegistro[der_total_horas_trabajadas ]"placeholder="  horas trabajadas ">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[der_hora_inicio]" value="<?php echo $objdetalleRegistro[0]->der_hora_inicio ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->der_hora_inicio ?>"  type="text" class="form-control" id=" der_hora_inicio "  name="detalleRegistro[der_hora_inicio ]"placeholder="  hora de inicio ">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[der_hora_fin]" value="<?php echo $objdetalleRegistro[0]->der_hora_fin ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->der_hora_fin ?>"  type="text" class="form-control" id="der_hora_fin"  name="detalleRegistro[der_hora_fin]"placeholder=" hora fin ">
  </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="detalleRegistro[der_created_at]" value="<?php echo $objdetalleRegistro[0]->der_created_at ?>">
  <div class="col-sm-10">
    <input  value="<?php $objdetalleRegistro[0]->der_created_at ?>"  type="text" class="form-control" id="der_created_at"  name="detalleRegistro[der_created_at]"placeholder=" fecha de creacion ">
  </div>
</div>


<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Actualizar Pez</button>
  </div>
</div>
</form>

</div>

<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>