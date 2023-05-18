<?php
    
    $nom=$_POST['nombre'];
    $ape=$_POST['fechahecho'];
    $nomp=$_POST['nombrepadres'];
    $dui=$_POST['dui'];
    $solicitudP=$_POST['solicitud'];
    $gruposan=$_POST['otros'];
    $observacioneS=$_POST['observaciones'];

    $fecha = date("d/m/y H:i a")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso de Valores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #1C2833;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-sm-12 col-lg-6 ">                
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Registrado</h3>
                        </div>
                        <div class="card-body">
                            <p><b>Fecha de Registro:</b> <?php echo $fecha?> </p>
                            <p><b>Nombres:</b> <?php echo $nom; ?></p>  
                            <p><b>Fecha del hecho:</b> <?php echo $ape; ?></p>  
                            <p><b>Nombre de los padres:</b> <?php echo $nomp; ?></p> 
                            <p><b>DUI:</b> <?php echo $dui; ?></p>  
                            <p><b>Solicitud de partidas:</b> <?php echo $solicitudP_str; ?></p>
                            <p><b>Otros:</b> <?php echo $otroS_str; ?></p>
                            <p><b>Observaciones:</b> <?php echo $observacioneS; ?></p> 
                        </div>
                        <div class="card-footer text-center">
                            <h6>Jonathan Moran</h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
