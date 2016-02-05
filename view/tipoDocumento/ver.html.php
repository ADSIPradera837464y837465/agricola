
<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1> ver Implemento </h1>




    <br>

    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>    
          <th>Descripcion</th>
          <th>Accion</th>                    
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objTipoDocumento as $tipoDocumento) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>            
            <td><?php echo $tipoDocumento->descripcion ?></td>            
            <td>
              
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

</body>
</html>


