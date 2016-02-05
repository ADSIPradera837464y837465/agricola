<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Metodo Riego<small>Reporte</small></h1>
  <hr>
  <p>Busca y genera un reposte sobre metodo de riego</p>
  <form>
    <label>Metodo</label>
    <input name="metodo" id="metodo" type="text" class="" >
    <label>Fecha inicio</label>
    <input name="finicio" id="metodo" type="date" class="" >
    <label>Fecha fin</label>
    <input name="ffin" id="metodo" type="date" class="" >
  </form>
  <table class="table">
    <thead>
      <tr>
        <th>N°</th>
        <th>metodo</th>
      </tr>
    </thead>
  </table>
</div>
<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>