<?php use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>

<h1>Modificar Implemento</h1>

<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl()?>index.php/laboresMaquinaEquipo/actualizar" method="post">
        <input type="hidden" name="laboresMaquinaEquipo[id]" value="<?php echo $objLaboresMaquinaEquipo[0]->id?>">       
        <div class="form-group" class="modificar">
        <label for="descipcion">descripcion </label>
        <input value="<?php echo $objLaboresMaquinaEquipo[0]->hacienda_id ?>" type="text" class="form-control" id="hacienda_id" name="laboresMaquinaEquipo[hacienda_id]" placeholder="hacienda">
        </div>
        
        <br>
        <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/index">Cancelar</a></button>
        </div>
    </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>

