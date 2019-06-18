<?php
   require("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car_wash Enmanuel</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    
    
</head>
<body>
    <header>
        
    </header>
    <nav>
        <div class="jumbotron">
                <h1 class="display-4 text-info" >Car_wash Emmanuel!</h1>
                <p class="lead p-3 mb-2 bg-secondary text-white">El mejor en autolavado, confía tú auto solo a los mejores!</p>
                <hr class="my-4">
            <div class="container">
                <ul>
                    <div class="row">
                        <div class="col-md-6 ">
                            <li><a href="index.php" class="btn btn-outline-success"><strong>INICIO</strong></a></li>
                        </div>

                        <div class = "col-md-6">
                            <li><a href="consulta.php" class="btn btn-outline-primary" ><strong>REPORTE</strong></a></li>
                        </div>
                        
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <article>
            
            <form action="logica.php" method="post">
                    <div class="jumbotron">
                        <div class="container">
                            <table width="652">
                                <tr>
                                    <td width="301"><p for="" class="p-1 mb-2 bg-dark text-white">Placa del vehiculo:</p></td>
                                    <td width="35">&nbsp;</td>
                                    <td width="292" class="p-1 mb-2 bg-dark text-white"><input type="text" name="placa" id="" required></tr>
                                </tr>
                                <tr>
                                    <td><p for="" class="p-2 mb-2 bg-info text-white">Tipo de Carro</p></td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <select name="tipo_carro" id="">
                                        <option value="sedan">Sedan</option>
                                        <option value="pickup">Pick Up</option>
                                        <option value="microbus">Microbus</option>
                                        <option value="camion">Camion</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="3"><p for="" class="p-2 mb-1 bg-success text-white">Seleccione los servicios ofrecidos</p></td>
                                </tr>
                                    <?php
                                        $consulta = "SELECT * FROM servicios";
                                        $resultado = mysqli_query($conexion,$consulta);
                                        
                                        while ($fila = mysqli_fetch_array($resultado)) {
                                    ?>
                                <tr>
                            
                                    <td> <?php echo "<p>".$fila['servicios']."</p>"?></td>
                                    <td><?php echo "<p>$". $fila['precios']."</p>"; ?></td>
                                        <td>
                                        <input type="radio"  name="<?php echo $fila['id']; ?>" value="<?php echo $fila['servicios'];?>" id=""> 
                                        <input type="hidden" name="<?php echo $fila['listaprecio']; ?>" value="<?php echo $fila['precios']; ?>"><br>
                                        
                                    </td>
                                        
                                </tr>
                                    <?php
                                            
                                        }
                                        mysqli_close($conexion);
                                    ?>
                                <tr>
                                    <td> <p for="" class="p-1 mb-2 bg-danger text-white">Fecha</p></td>
                                    <td>&nbsp;</td>
                                    <td class="p-1 mb-1 bg-danger text-white">
                                    <input type="date" name="fecha" id="">
                                    </td>
                                </tr>
                                <br>
                                <tr>
                                    <td><input type="reset" class="btn btn-outline-primary" value="REINICIAR"></td>
                                    <td>&nbsp;</td>
                                    <td height="28"><input type="submit" class="btn btn-outline-success" value="ENVIAR"></td>
                                </tr>
                                
                                
                            </table>
                        </div>
                    </div>
                    
            </form>
            
            
        </article>
    </section>
        <?php
            $var = $_GET['valor'];
            if (!empty($var)) {
                # code...
        ?>
            <script type="text/javascript">
                alert("Datos guardado con exito!");
            </script>
        <?php        
            } 
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
</body>
</html>