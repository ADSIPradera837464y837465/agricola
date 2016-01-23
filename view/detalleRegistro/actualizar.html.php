<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>


<div class="container container-fluid">
  <h1>Detalle Registro</h1>
  <p>Actualizar</p>
 
  
  <?php foreach ($objdetalleRegistro as $dRegistro) :?>    
  <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/detalleRegistro/editar"> 
    <h2>Descripción</h2>    
    <input type="text"  name="relme_numero" id="relme_numero" value="<?php echo $dRegistro->relme_numero ?>">
    
    <input type="text"  name="ter_id" id="ter_id" value="<?php echo $dRegistro->ter_id ?>">
    
    <input type="text"  name="lab_id" id="lab_id" value="<?php echo $dRegistro->lab_id ?>">
    
    <input type="text"  name="sue_id" id="sue_id" value="<?php echo $dRegistro->sue_id ?>">
    
    <input type="text"  name="pro_id" id="pro_id" value="<?php echo $dRegistro->pro_id ?>">
    
    <input type="text"  name="unm_id" id="unm_id" value="<?php echo $dRegistro->unm_id ?>">
    
    <input type="text"  name="maq_id" id="maq_id" value="<?php echo $dRegistro->maq_id ?>">
    
    <input type="text"  name="der_tiempo_muerto" id="der_tiempo_muerto" value="<?php echo $dRegistro->der_tiempo_muerto ?>">
    
    <input type="text"  name="der_total_horas_trabajadas" id="der_total_horas_trabajadas" value="<?php echo $dRegistro->der_total_horas_trabajadas ?>">
    
    <input type="text"  name="relme_numero" id="der_hora_inicio" value="<?php echo $dRegistro->der_hora_inicio ?>">
    
    <input type="text"  name="relme_numero" id="der_hora_fin" value="<?php echo $dRegistro->der_hora_fin ?>">
    
    <input type="text"  name="relme_numero" id="der_created_atder_created_at" value="<?php echo $dRegistro->der_created_at ?>">
    
    <?php endforeach; ?>
    
    <button  type="submit"> Actualizar </button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>