<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>

<h1>Modificar Rol</h1>

<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl()?>index.php/rol/actualizar" method="post">
        <input type="hidden" name="rol[id]" value="<?php echo $objRol[0]->id?>">       
        <div class="form-group" class="modificar">
        <label for="descipcion">descripcion </label>
        <input value="<?php echo $objRol[0]->nombre ?>" type="text" class="form-control" id="descripcion" name="rol[descripcion]" placeholder="nombre">
        </div>
        
        <br>
        <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/rol/index">Cancelar</a></button>
        </div>
    </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>