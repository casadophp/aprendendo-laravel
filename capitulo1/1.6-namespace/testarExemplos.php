<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once 'teste1.php';
require_once 'teste2.php';

use teste1\Usuario as usu1;
use teste2\Usuario as usu2;

$u1 = new usu1();
$u2 = new usu2();

echo "<pre> Exemplos: ";
var_dump($u1);

echo "<br />";
var_dump($u2);
