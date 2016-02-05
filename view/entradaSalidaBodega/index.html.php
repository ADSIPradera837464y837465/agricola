<?php
include_once $fsConfig->getPath() . 'view/partial/head.php';
include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php';
include_once $fsConfig->getPath() . 'controller/entradaSalidaBodega/filtro.class.php';
?>

<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(7) ?>
<div class="container container-fluid">
  <h1>Lista </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/nuevo"  class="btn btn-success glyphicon glyphicon-plus" >Nuevo</a>
  </p>
  <div>
      <?php if($objMetodo !== false) :?> 
  
 
  <form  class="navbar-form navbar-left" role="search" name="formulario_registro" method="POST">
    
    <input type="text" class="form-control" id="filtro" name="filtro">
  
    <button type="submit"  class="btn btn-warning glyphicon glyphicon-search">Filtrar </button>
  </form>


    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>
          <th>Id entrada</th>
          <th>Observacion</th>
         </tr>
      </thead>

      <tbody>
        <?php foreach ($objMetodo as $entradaSalidaBodega) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $entradaSalidaBodega->id ?></td>
            <td><?php echo $entradaSalidaBodega->observacion?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/ver?id=<?php echo $entradaSalidaBodega->id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/editar?id=<?php echo $entradaSalidaBodega->id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a href="#" data-toggle='modal' data-target='#myModal<?php echo $entradaSalidaBodega->id ?>' class="btn btn-danger btn-xs">eliminar</a>
              <?php include $fsConfig->getPath() . 'view/partial/modalEliminarEntradaSalidaBodega.php'; ?>

            </td>
          </tr>
        <?php endforeach ?>
      </tbody>

    </table>

    <?php $pagina->render() ?>
     <?php else: ?>
      <h2>No hay registros</h2>
 
<?php endif;  ?>
    <div>
      <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
    </div>
  </div>
  <script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
  <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
