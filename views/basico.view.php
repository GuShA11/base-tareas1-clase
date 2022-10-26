<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ejercicios Básicos</h1>
</div>

<!-- Content Row -->

<div class="row">
    <!-- Ejercicio 1 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 1</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    <?php
                    echo $data['ejercicio1Resultado'];
                    ?> 
                </p>
            </div>
        </div>
    </div>
    <!-- Ejercicio 2 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 2</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    <?php
                    echo $data['ejercicio2Resultado'];
                    ?>
                </p>
            </div>
        </div>
    </div>
    <!-- Ejercicio 3 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 3</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    Base :<?php echo $data['eje03_base']; ?>
                    Altura :<?php echo $data['eje03_altura']; ?><br>
                    Área :<?php echo $data['eje03_area']; ?>
                    Perimetro :<?php echo $data['eje03_perimetro']; ?>
                </p>
            </div>
        </div>
    </div>
    <!-- Ejercicio 4 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 4</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    <?php
                    echo $data['ejercicio4Resultado'];
                    ?>
                </p>
            </div>
        </div>
    </div> 
    <!-- Ejercicio 5 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 5</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    Precio noche TA: <?php echo $data['precio_nocheTA']; ?><br>
                    Precio noche TB: <?php echo $data['precio_nocheTB']; ?><br>
                    Noches alojado TA: <?php echo $data['noches_alojadoAlta']; ?><br>
                    Noches alojado TB: <?php echo $data['noches_alojadoBaja']; ?><br>
                    Total: <?php echo $data['eje05_total']; ?>
                </p>
            </div>
        </div>
    </div> 
    <!-- Ejercicio 6 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 6</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    Radio: <?php echo $data['eje06_radio']; ?><br>
                    Área: <?php echo $data['eje06_area']; ?><br>
                    Perimtéro: <?php echo $data['eje06_perimetro']; ?>
                </p>
            </div>
        </div>
    </div>
    <!-- Ejercicio 7 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 7</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    Velocidad KmH: <?php echo $data['ejercicio07_kmh']; ?><br>
                    Velocidad ms: <?php echo $data['ejercicio07_ms']; ?>
                </p>
            </div>
        </div>
    </div>
    <!-- Ejercicio 8 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 8</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    "El número <?php echo $data['eje08num'] ?> está formado por <?php echo $data['eje08cen'] ?> centenas, <?php echo $data['eje08dec'] ?> decenas y <?php echo $data['eje08uni'] ?> unidades"
                </p>
            </div>
        </div>
    </div>
    <!-- Ejercicio 9 -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 9</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    La cadena de texto "<?php echo $data['eje09cadena']; ?>" está formada por <?php echo $data['eje09Letras']; ?> letras y <?php echo $data['eje09Palabras']; ?> palabras.
                </p>
            </div>
        </div>
    </div>
    <!-- Data -->
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data</h6>                                    
            </div>
            <div class="card-body">
                <p>
                    <?php var_dump($data) ?>   
                </p>
            </div>
        </div>
    </div>
</div>
