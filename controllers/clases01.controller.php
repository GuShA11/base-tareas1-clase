<?php

declare (strict_types=1);

use Com\Daw2\Helpers\Proveedor;
use Com\Daw2\Helpers\Categoria;
use Com\Daw2\Helpers\Producto;

$pr1 = new Proveedor("Q2826000H", "PROV-1", "Primer provedor", "IES PAZO DA MERCE", "https://www.edu.xunta.gal/centros/iespazomerce/", "ESPAÑA", "IESPAZODAMERCE@gmail.XUNTA.GAL", "912345765");
var_dump($pr1);

$c = new Categoria('Telefonía');
$c2 = new Categoria('Android',$c);
$c3 = new Categoria('Samsung',$c2);


