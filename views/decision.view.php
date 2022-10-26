<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ejercicios Estructuras Decisión</h1>
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
                <p class="<?php echo $data['ej1_resultado']? 'text-success':'text-danger'?>">
                    El número  <?php echo $data['ej1_dividendo']; ?> <?php echo $data['ej1_resultado'] ? '' : 'no'; ?> es divisible entre <?php echo $data['ej1_divisor']; ?>
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
                <p class="text-success">
                    <?php echo $data['ej2_num1']===$data['ej2_resultado']?"<b>".$data['ej2_num1']."</b>": $data['ej2_num1']; ?>
                    <?php echo $data['ej2_num2']===$data['ej2_resultado']?"<b>".$data['ej2_num2']."</b>": $data['ej2_num2']; ?>
                    <?php echo $data['ej2_num3']===$data['ej2_resultado']?"<b>".$data['ej2_num3']."</b>": $data['ej2_num3']; ?>
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
                <p class="text-success">
                    <?php echo $data['eje3_numSegundosTotales']?> segundos, equivalen a: 
                    <?php echo $data['eje3_numDias']==1?$data['eje3_numDias']." dia":$data['eje3_numDias']." dias"?>
                    <?php echo $data['eje3_numHora']==1?$data['eje3_numHora']." hora":$data['eje3_numHora']." horas"?>
                    <?php echo $data['eje3_numMin']==1?$data['eje3_numMin']." minuto":$data['eje3_numMin']." minutos"?> 
                    <?php echo $data['eje3_numSec']==1?$data['eje3_numSec']." segundo":" segundos"?> 
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
                <p class="<?php echo $data['eje4resultado']? 'text-success':'text-danger'?>">
                    El año <?php echo $data['eje4anyo']?> <?php echo $data['eje4resultado']==1?"":"no";?> es bisiesto
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
                <p class="text-success">
                     "El número <?php echo $data['eje5num'] ?> está formado por <?php echo $data['eje5cen'] ?> centenas, <?php echo $data['eje5dec'] ?> decenas y <?php echo $data['eje5uni'] ?> unidades"
                </p>
            </div>
        </div>
    </div> 
    <!-- Ejercicio 6 -->
    <div class="col-12 col-sm-6 col-lg-4">
                    <?php echo $data['ej6sueldoNeto']>=2000?'<p class="alert alert-success"> Felicidades, tienes un salario por encima de la media</p>':""?>
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ejercicio 6</h6>                                    
            </div>
            <div class="card-body">
                <p> 
                    Sueldo: <?php echo $data['ej6descuento']+$data['ej6sueldoNeto']?>€<br/>
                    Sueldo neto: <?php echo $data['ej6sueldoNeto']?>€<br/>
                    Descuento: <?php echo $data['ej6descuento']?>€<br/>
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
                <p class="<?php echo ($data['ej7color'])?>">
                    <?php echo $data['ej7string']?><br/>Nota: <?php echo $data['ej7nota']?>
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
                <p class="<?php echo $data['ej8resultado']==""?"text-danger":"text-success"?>">
                    <?php echo $data['ej8resultado']==""?"¡Error: Bebida inválida!":$data['ej8cadena']." es un ".$data['ej8resultado'];?>
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
