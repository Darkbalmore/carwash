<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car_wash Enmanuel</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
    <header>
        
    </header>
    <nav>
        <div class="container text-center">
        <ul>
            <li><a href="index.php" class="btn btn-outline-success"><strong>INICIO</strong></a></li>
            <li></li>
        </ul>
        </div>
    </nav>
    <section>
        <form action="" method="post">
            <table width="490" height="114">
                <tr>
                    <td><p class="p-1 mb-2 bg-info text-white">fecha de inicio del reporte</p></td>
                    <td class="p-1 mb-2 bg-info text-white"><input type="date" name="fecha1" id=""></td>
                </tr>
                <tr>
                    <td height="44"><p class="p-1 mb-2 bg-success text-white">fecha finalización del reporte</p></td>
                    <td class="p-1 mb-2 bg-success text-white"><input type="date" name="fecha2" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-outline-warning" value="REPORTE"></td>
                </tr>
            </table>
        </form>
    </section>
    <section>
        <p>
            <?php
            require("conexion.php");
            if (!empty($_POST['fecha1']) and !empty($_POST['fecha2'])) {
                # code...
            ?>
        </p>
        <table border="1" bordercolor="#000099">
            <tr>
                <th width="52">PLACA</th>
                <th width="125">TIPO DE CARRO</th>
                <th width="86">SERVICIOS</th>
                <th width="53">TOTAL</th>
                <th width="49">FECHA</th>
            </tr>
            <?php
                $fecha1 = $_POST['fecha1'];
                $fecha2 = $_POST['fecha2'];
                $consulta = "SELECT * from transaccion where fecha between '$fecha1' and '$fecha2'";
                $query = mysqli_query($conexion,$consulta);
                while ($fila = mysqli_fetch_array($query)) {
                    # code...
            ?>
            <tr>
                <td><?php echo $fila['placa']; ?></td>
                <td><?php echo $fila['tipo_carro']; ?></td>
                <td><?php echo $fila['servicios']; ?></td>
                <td><?php echo $fila['total']; ?></td>
                <td><?php echo $fila['fecha']; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <p><a href="reporte.php?fecha1=<?php echo $fecha1?>&fecha2=<?php echo $fecha2?>" class="btn btn-outline-success"><strong>REPORTE EN PDF</strong></a></p>
        <?php
            }
            
        ?>    
        
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>