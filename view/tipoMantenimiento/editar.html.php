<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<?php

use FStudio\fsController as controller; ?>


<div class="container container-fluid">

  <h1>Editar</h1>
  <form class="form-inline" action="<?php echo $fsconfig->getUrl() ?>index.php/tipoMantenimiento/editar" method="post">
    <input type="hidden" name="tipoMantenimiento[tma_id]" value="<?php echo $objtipoMantenimiento[0]->tma_id ?>">
    <div class="col-sm-10">
      <input  value="<?php $objtipoMantenimiento[0]->tma_id ?>"  type="text" class="form-control" id="tma_id"  name="tipoMantenimiento[tma_id]"placeholder="identificacion tipo mantenimiento">
    </div>
</div>

<div class="form-group" class="modificar">
  <input type="hidden" name="tipoMantenimiento[tma_descripcion]" value="<?php echo $objtipoMantenimiento[0]->tma_descripcion ?>">
  <div class="col-sm-10">
    <input  value="<?php $objtipoMantenimiento[0]->tma_descripcion ?>"  type="text" class="form-control" id="tma_descripcion"  name="tipoMantenimiento[tma_descripcion]"placeholder="descripcion tipo mantenimiento">
  </div>
</div>


<div class="form-group" class="modificar">
  <input type="hidden" name="tipoMantenimiento[tma_created_at]" value="<?php echo $objtipoMantenimiento[0]->tma_created_at?>">
  <div class="col-sm-10">
    <input  value="<?php $objtipoMantenimiento[0]->tma_created_at ?>"  type="text" class="form-control" id="tma_created_at"  name="tipoMantenimiento[tma_created_at]"placeholder="created">
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

