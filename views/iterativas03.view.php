<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Iterativas03</h1>

</div>

<!-- Content Row -->

<div class="row">
    <?php
    if (isset($data['resultado'])) {
        ?>
        <div class="alert alert-success">
                <pre><?php
                foreach ($data['resultado'] as $subarray) {
                    echo'|';
                    $lineaTxt = '';
                    foreach ($subarray as $num) {
                        $lineaTxt .= str_pad($num, $data['longitud'], ' ', STR_PAD_LEFT) . ',';
                    }
                    echo substr($lineaTxt, 0, -1);
                    echo '|<br/>';
                }
                ?></pre>
        </div>
    <?php } ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ordenar array</h6>                                    
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!--<form action="./?sec=formulario" method="post">-->
                <form method="post" action="./?sec=iterativas03">
                    <!--<input type="hidden" name="sec" value="iterativas03" />-->
                    <div class="mb-3">
                        <label for="datos">Números a comprarar:</label>
                        <input class="form-control" id="datos" type="text" name="datos" placeholder="1,2,3,4,5" value="<?php echo isset($data['input']['datos']) ? ($data['input']['datos']) : ''; ?>">
                        <p class="text-danger small"><?php echo isset($data['errores']['datos']) ? $data['errores']['datos'] : '' ?></p>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>

