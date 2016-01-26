<?php use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>

<h1>Modificar Implemento</h1>

<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl()?>index.php/implemento/actualizar" method="post">
        <input type="hidden" name="implemento[id]" value="<?php echo $objImplemento[0]->id?>">       
        <div class="form-group" class="modificar">
        <label for="descipcion">descripcion </label>
        <input value="<?php echo $objImplemento[0]->descripcion ?>" type="text" class="form-control" id="descripcion" name="implemento[descripcion]" placeholder="descripcion">
        </div>
        
        <br>
        <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/implemento/index">Cancelar</a></button>
        </div>
    </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>

