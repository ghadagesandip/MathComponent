<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Sandip\Controller\Component;

$ob= new MathComponentNew();

echo $ob->doAddition(1,2);exit;







