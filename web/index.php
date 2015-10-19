<?php

session_start();

include '../config.php';
include '../lib/vendor/controllerClass.php';
include '../lib/vendor/modelClass.php';
include '../lib/vendor/viewClass.php';

try {
  if (isset($_SERVER['PATH_INFO']) === true) {
    $data = explode('/', $_SERVER['PATH_INFO']);
  } else {
    $data[0] = '/';
    $data[1] = MODULO_DEFAULT;
    $data[2] = ACCION_DEFAULT;
  }
  
  $cnt = count($data) - 1;
  $fileClass = DIR . 'controller/';
  for ($x = 1; $x < $cnt; $x++) {
    $fileClass = $fileClass . $data[$x] . '/';
  }
  $fileClass = $fileClass . $data[$x] . 'ControllerClass.php';

  if(file_exists($fileClass) === false) {
    throw new PDOException('El módulo y acción solicitados no existen');
  }
  include $fileClass;
  $class = $data[$x] . 'ControllerClass';
  $class::main();
} catch (PDOException $exc) {
  var_dump($exc->getMessage());
  var_dump($exc->getTrace());
}
