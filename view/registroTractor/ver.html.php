<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">
    
    <h1>Informacion de <?php echo $objregistroTractor[0]-> nombre ?></h1>

    <div class="list-group">
        <div class="list-group-item ">
            <h4 class="list-group-item-heading">ID</h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->rtr_item ?></p>
            
        </div>
        <div class="list-group-item ">
            <h4 class="list-group-item-heading">Control salida de caña</h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->csc_id ?></p>
            
        </div>
         <div class="list-group-item ">
            <h4 class="list-group-item-heading"> Hora de salida</h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->hora_salida ?></p>
            
        </div>
      
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> Registro de tractor</h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->rtr_tractor ?></p>
            
        </div>
      
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> Observaciones</h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->rtr_observacion ?></p>
            
        </div>
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> fecha de creacion </h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->der_created_at ?></p>
            
        </div>
      
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading"> Modificacion </h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->der_updated_at ?></p>
            
        </div>
      
      <div class="list-group-item ">
            <h4 class="list-group-item-heading">Fecha de eliminacion</h4>
            <p class="list-group-item-text"><?php echo $objregistroTractor[0]->der_deleted_at ?></p>
            
       
      
     
      
      
    </div>
    <div class="text-right">Volver </div>
    <a href=" <?php config::getUrl() ?>index.php/detalleRegistro/index" class="btn btn-danger">Volver</a>
    </div>

    <?php include_once $fsConfig->getPath() . 'view/partial/foot.php'  ?>



