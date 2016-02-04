<?php use FStudio\fsController as controller ?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
<h1>Modificar Informacion</h1>
<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl()?>index.php/entradaSalidaBodega/actualizar" method="post">
        <input type="hidden" name="entradaSalidaBodega[esbId]" value="<?php echo $objEntradaSalidaBodega[0]->id ?>">
        <div class="form-group" class="modificar">
            <label for="esbId">id entrada salida bodega</label>
            <input value="<?php echo $objEntradaSalidaBodega[0]->id ?>" type="text" class="form-control" id="esbId" name="entradaSalidaBodega[esbId]" placeholder="id entrada salida bodega">
        </div>
        <div class="form-group" class="modificar">
       <label for="terIdElabora">id de tercero elabora </label>
        <input value="<?php echo $objEntradaSalidaBodega[0]->tercero_id_elabora ?>" type="text" class="form-control" id="terIdElabora" name="entradaSalidaBodega[terIdElabora]" placeholder="id tercero elabora">
        </div>
        <div class="form-group" class="modificar">
            <label for="terIdSolicita">id tercero solicita </label>
            <input value="<?php echo $objEntradaSalidaBodega[0]->tercero_id_solicita ?>" type="text" class="form-control" id="terIdSolicita" name="entradaSalidaBodega[terIdSolicita]" placeholder="id tercero solicita">
        </div>
        <div class="form-group" class="modificar">
        <label for="tpdId">id tipo documento </label>
        <input value="<?php echo $objEntradaSalidaBodega[0]->tipo_documento_id ?>" type="text" class="form-control" id="tpdId" name="entradaSalidaBodega[tpdId]" placeholder="id tipo documento">
        </div>
        <div class="form-group" class="modificar">
            <label for="esbFecha">fecha $</label>
            <input value="<?php echo $objEntradaSalidaBodega[0]->fecha ?>" type="text" class="form-control" id="esbFecha" name="entradaSalidaBodega[esbFecha]" placeholder="fecha">
        </div>
                <div class="form-group" class="modificar">
            <label for="esbObservacion">observacion $</label>
            <input value="<?php echo $objEntradaSalidaBodega[0]->observacion ?>" type="text" class="form-control" id="esbObservacion" name="entradaSalidaBodega[esbObservacion]" placeholder="observacion">
        </div>
        <br>
        <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/index">Cancelar</a></button>
        </div>
    </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>
