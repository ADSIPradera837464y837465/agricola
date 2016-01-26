<?php use FStudio\fsController as controller; ?>

<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>

<h1>Modificar labores maquina equipo</h1>

<div class="container container-fluid"> 
  <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/actualizar" method="post">
    <input type="hidden" name="laboresMaquinaEquipo[id]" value="<?php echo $objLaboresMaquinaEquipo[0]->id ?>">       
    <div class="form-group" class="modificar">
      <label for="hacienda_id">hacienda_id </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->hacienda_id ?>" type="text" class="form-control" id="hacienda_id" name="laboresMaquinaEquipo[hacienda_id]" placeholder="hacienda">
    </div>

    <div class="form-group" class="modificar">
      <label for="tercero_id">tercero_id </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->tercero_id ?>" type="text" class="form-control" id="tercero_id" name="laboresMaquinaEquipo[tercero_id]">
    </div>

    <div class="form-group" class="modificar">
      <label for="tipo_documento_id">tipo_documento_id </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->tipo_documento_id ?>" type="text" class="form-control" id="tipo_documento_id" name="laboresMaquinaEquipo[tipo_documento_id]" placeholder="tipo_documento_id">
    </div>

    <div class="form-group" class="modificar">
      <label for="implemento_id">implemento_id </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->implemento_id ?>" type="text" class="form-control" id="implemento_id" name="laboresMaquinaEquipo[implemento_id]" placeholder="implemento_id">
    </div>

    <div class="form-group" class="modificar">
      <label for="fecha">fecha </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->fecha ?>" type="text" class="form-control" id="fecha" name="laboresMaquinaEquipo[fecha]" placeholder="fecha">
    </div>

    <div class="form-group" class="modificar">
      <label for="hacienda_id">estado </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->estado ?>" type="text" class="form-control" id="estado" name="laboresMaquinaEquipo[estado]" placeholder="estado">
    </div>

    <div class="form-group" class="modificar">
      <label for="hacienda_id">tiempo </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->tiempo ?>" type="text" class="form-control" id="tiempo" name="laboresMaquinaEquipo[tiempo]" placeholder="tiempo">
    </div>

    <div class="form-group" class="modificar">
      <label for="total_horas_trabajadas">total_horas_trabajadas </label>
      <input value="<?php echo $objLaboresMaquinaEquipo[0]->total_horas_trabajadas ?>" type="text" class="form-control" id="total_horas_trabajadas" name="laboresMaquinaEquipo[total_horas_trabajadas]" placeholder="total_horas_trabajadas">
    </div>

    <br>
    <div id="modificar">
      <button  type="submit" class="btn btn-default">Actualizar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>

