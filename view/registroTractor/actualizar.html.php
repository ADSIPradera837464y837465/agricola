<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>


<div class="container container-fluid">
  <h1>Registro Tractor</h1>
  <p>Actualizar</p>
 
  
  <?php foreach ($objregistroTractor as $Rtractor) :?>    
  <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/registroTractor/editar"> 
    <h2>Descripción</h2>    
    <input type="text"  name="csc_id" id="csc_id" value="<?php echo $Rtractor->csc_id ?>">
    
    <input type="text"  name="hora_salida" id="hora_salida" value="<?php echo $Rtractor->hora_salida ?>">
    
    <input type="text"  name="rtr_tractor" id="rtr_tractor" value="<?php echo $Rtractor->rtr_tractor ?>">
    
    <input type="text"  name="rtr_observacion" id="rtr_observacion" value="<?php echo $Rtractor->rtr_observacion ?>">
    
    <input type="text"  name="der_created_at" id="der_created_at" value="<?php echo $Rtractor->der_created_at ?>">
    
    <?php endforeach; ?>
    
    <button  type="submit"> Actualizar </button>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>