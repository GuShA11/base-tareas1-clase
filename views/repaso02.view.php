<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ejercicio 2</h1>

</div>

<!-- Content Row -->

<div class="row">
    <?php var_dump($_POST)?>
    <?php var_dump($data)?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulario</h6>                                    
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!--<form action="./?sec=formulario" method="post">-->
                <form method="post" action="./?sec=repaso02">
                    <input type="hidden" name="sec" value="formulario" />
                    <div>
                        <!-- FALTA PONER QUE SALGA TODO CORRECTO SI TODO ESTA BIEN EN EL FORMULARIO -->
                    </div>
                    <div class="mb-3">
                        <label for="nombre">Nombre completo</label>
                        <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Inserte el nombre"  value="<?php echo isset($data['input']['nombre']) ? ($data['input']['nombre']) : ''; ?>">
                        <p class="text-danger small"><?php echo isset($data['errores']['nombre']) ? $data['errores']['nombre'] : '' ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="nombre">IP</label>
                        <input class="form-control" id="ip" type="text" name="ip" placeholder="Inserte la IP"  value="<?php echo isset($data['input']['ip']) ? ($data['input']['ip']) : ''; ?>">
                        <p class="text-danger small"><?php echo isset($data['errores']['ip']) ? $data['errores']['ip'] : '' ?></p>
                    </div>
                    <div class="mb-3">
                            <div class="row">
                            <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="news" name="opcions[]" <?php echo (isset($data['opcions']) && in_array('news', $data['opcions'])) ? "checked" : ''; ?>>
                                <label class="form-check-label" for="flexCheckDefault">Suscribirse newsletter</label>
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="socio" name="opcions[]" <?php echo (isset($data['opcions']) && in_array('socio', $data['opcions'])) ? "checked" : ''; ?>>
                                <label class="form-check-label" for="flexCheckChecked">Hacerse socio</label>
                            </div>
                            </div>
                        <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" id="flexCheckDisabled" type="checkbox" value="tarjeta"  name="opcions[]" <?php echo (isset($data['opcions']) && in_array('tarjeta', $data['opcions'])) ? "checked" : ''; ?>>
                                <label class="form-check-label" for="flexCheckDisabled">Tarjeta crédito</label>
                            </div>
                        </div>
                            </div>
                        </div>
                        <p class="text-danger small"><?php echo isset($data['errores']['checkbox']) ? $data['errores']['checkbox'] : '' ?></p>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1">Mi codigo fuente:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="textarea" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>

