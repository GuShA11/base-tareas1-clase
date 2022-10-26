<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Iterativas06</h1>

</div>
 <?php var_dump($data);?>
<!-- Content Row -->

<div class="row">
    <?php
    if (isset($data['resultado'])) {
        ?>
        <div class="alert alert-success">
                <?php
                        foreach ($data['resultado'] as $key => $value) {
                            echo $key." => ".$value."<br>";
                        }
                ?>
        </div>
    <?php } ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Inserte el numero limite para calcular los primos</h6>                                    
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!--<form action="./?sec=formulario" method="post">-->
                <form method="post" action="./?sec=iterativas06">
                    <!--<input type="hidden" name="sec" value="iterativas06" />-->
                    <div class="mb-3">
                        <label for="datos">Inserte el numero</label>
                        <input class="form-control" id="datos" type="number" name="datos" placeholder="" value="<?php echo isset($data['input']['datos']) ? ($data['input']['datos']) : ''; ?>">
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

