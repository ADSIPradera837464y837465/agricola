<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">
    
    <h1>Informacion de <?php echo $objdetalleRegistro[0]-> nombre ?></h1>

    <div class="list-group">
        <div class="list-group-item ">
            <h4 class="list-group-item-heading">ID</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->relme_numero ?></p>
            
        </div>
        <div class="list-group-item ">
            <h4 class="list-group-item-heading">Id del empleado</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->ter_id ?></p>
            
        </div>
         <div class="list-group-item ">
            <h4 class="list-group-item-heading"> labor</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->lab_id ?></p>
            
        </div>
      
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> Suerte</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->sue_id ?></p>
            
        </div>
      
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> identificacion de producto</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->pro_id ?></p>
            
        </div>
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading">Unidad de medida</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->unm_id ?></p>
            
        </div>
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading">maquina</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->maq_id ?></p>
            
        </div>
      <div class="list-group-item ">
            <h4 class="list-group-item-heading">tiempo muerto</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->der_tiempo_muerto ?></p>
            
        </div>
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> horas trabajadas</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->der_total_horas_trabajadas ?></p>
            
        </div>
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> hora de inicio</h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->der_hora_inicio ?></p>
            
        </div>
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> hora fin </h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistro[0]->der_hora_fin ?></p>
            
        </div>
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> fecha de creacion </h4>
            <p class="list-group-item-text"><?php echo $objdetalleRegistroh[0]->der_created_at ?></p>
            
        </div>
      
     
      
      
    </div>
    <div class="text-right">Volver </div>
    <a href=" <?php config::getUrl() ?>index.php/detalleRegistro/index" class="btn btn-danger">Volver</a>
    </div>

    <?php include_once $fsConfig->getPath() . 'view/partial/foot.php'  ?>



