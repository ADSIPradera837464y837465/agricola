
<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>

<div class="container container-fluid">
  <h1> ver rol </h1>




    <br>

    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>    
          <th>Nombre</th>
          <th>Accion</th>                    
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objRol as $rol) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>            
            <td><?php echo $rol->nombre ?></td>            
            <td>
              
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

</body>
</html>


