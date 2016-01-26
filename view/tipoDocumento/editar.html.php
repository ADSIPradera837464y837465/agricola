<?php use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>

<h1>Modificar Tipo documento</h1>

<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl()?>index.php/tipoDocumento/actualizar" method="post">
        <input type="hidden" name="tipoDocumento[id]" value="<?php echo $objTipoDocumento[0]->id?>">       
        <div class="form-group" class="modificar">
        <label for="descipcion">Descripcion </label>
        <input value="<?php echo $objTipoDocumento[0]->descripcion ?>" type="text" class="form-control" id="descripcion" name="tipoDocumento[descripcion]" placeholder="descripcion">
        </div>
        
        <div class="form-group" class="modificar">
        <label for="descipcion">Tipo movimiento </label>
        <input value="<?php echo $objTipoDocumento[0]->tipo_movimiento ?>" type="text" class="form-control" id="descripcion" name="tipoDocumento[tipo_movimiento]" placeholder="tipo movimiento">
        </div>
        
        <div class="form-group" class="modificar">
        <label for="descipcion">Estado </label>
        <input value="<?php echo $objTipoDocumento[0]->estado ?>" type="text" class="form-control" id="descripcion" name="tipoDocumento[estado]" placeholder="estado">
        </div>
        
        <br>
        <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/index">Cancelar</a></button>
        </div>
    </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>

