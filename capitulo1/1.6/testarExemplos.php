<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once 'teste1.php';
require_once 'teste2.php';

$u1 = new usuario();

$u2 = new usuario();

echo "<pre> Exemplos: ";
var_dump($u1);

echo "<br />";
var_dump($u2);
