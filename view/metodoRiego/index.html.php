<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<?php include_once 'Zebra_Pagination.php'; ?>
<div class="container container-fluid">
  <h1>Metodo de Riego <small> ver</small></h1>
  <hr>
  <div class="">
    <div>
      <a href="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/nuevo" class="btn btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar un  nuevo Metodo</a>    
    </div>
    <form class="col-lg-3 col-lg-offset-7 form-inline">
      <label><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
      <input name="filtro" id="filtro" class="form-control" placeholder="Buscar" >      
    </form>
  </div>
  <hr>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripción</th>
        <th>Creado</th>
        <th>Actualizado</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objMetodo as $metodo): ?>
        <tr>
          <td><?php echo $metodo->id ?></td>
          <td><?php echo $metodo->descripcion ?></td>
          <td><?php echo $metodo->created_at ?></td>
          <?php if (strlen($metodo->updated_at) > 0) : ?>
            <td><?php echo $metodo->updated_at ?></td>
          <?php else : ?>        
            <td>sin actualizar</td>
          <?php endif; ?>
          <td><a class="btn btn-primary" href="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/actualizar?id=<?php echo $metodo->id ?>">
              <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Actualizar</a>
            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="" > 
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Eliminar</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
    </tfoot>
  </table>
<?php $totalRgistros = count($objMetodo) ?>  
  
</div>

<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>