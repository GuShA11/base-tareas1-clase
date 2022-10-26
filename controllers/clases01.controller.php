<?php

declare (strict_types=1);

require './helpers/Categoria.php';
$c = new Categoria('Telefonía');
$c2 = new Categoria('Android',$c);
$c3 = new Categoria('Samsung',$c2);
echo $c3->getFullName();