<?php

if (isset($_POST['registrar'])) {
    $no_Dui = $_POST['no_dui'];
    $nombre = $_POST['nombres'];
    $cargo = $_POST['cargo'];
    $departamento = $_POST['departamentos'];
    $salario = $_POST['salario'];

    include('conexionDB.php');

    try {
        mysqli_query($conexion, "INSERT INTO empleado (NO_DUI, nombres, Cargo, Departamento, Salario) values ('$no_Dui', '$nombre', '$cargo', '$departamento', '$salario')");

        echo "<script>alert('USUARIO REGISTRADO CON EXITO EXITO');</script>";
        echo "<script> window.location.replace('./index.html'); </script>";    
    } catch (Exception) {
        echo "<script>alert('USUARIO YA EXISTENTE EN LA BASE DE DATOS');</script>";
        echo "<script> window.location.replace('./index.html'); </script>";
    }
    
    $conexion->close();
    
}

if(isset($_POST['Consultar'] )){
    $no_Dui = $_POST['no_dui'];
    include('conexionDB.php');

    $stmt = $conexion->prepare("select * from empleado where NO_DUI=?");
    $stmt->bind_param("s", $no_Dui);
    $stmt->execute();
    
    $rs = $stmt->get_result();

    if($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $no_Dui = $row['NO_DUI'];
            $nombre = $row['nombres'];
            $cargo = $row['Cargo'];
            $departamento = $row['Departamento'];
            $salario = $row['Salario'];
        ?>

<link rel="stylesheet" href="css/index.css">

<main>

            <div class="container">
                <div id="Registro-form" class="Registro-form">
                        <div class="form_content">
                            <h2>Datos almacenados</h2>
                            <div class="area_dui">
                                <label for="no_dui">NO DUI:</label>
                                <input type="text" id="no_dui" value="<?php echo $no_Dui; ?>" readonly/>

                            </div>
                            <div class="area_nombres">
                                <label for="nombres">Nombres:</label>
                                <input type="text" name="nombres" id="nombres" value="<?php echo $nombre; ?>" readonly>
                            </div>
                            <div class="area_cargo">
                                <label for="cargo">Cargo:</label>
                                <input type="text" id="cargo" value="<?php echo $cargo ; ?>" readonly>
                            </div>
                            <div class="area_departamentos">
                                <label for="departamentos">Departamentos:</label>
                                <input type="text" name="departamentos" id="departamentos" value="<?php echo $departamento; ?>" readonly>
                            </div>
                            <div class="area_salario">
                                <label for="Salario">Salario</label>
                                <input type="text" name="salario" id="Salario" value="<?php echo $salario; ?>" readonly>
                            </div>
                            <div>
                        <button id="btn-Registro" class="button btnRegistro">
                        <a href="index.html" style="text-decoration: none; color: white;">REGRESAR AL INICIO</a>
                        </button>
                            </div>
                        </div>
                </div>
    
            </div>       
</main>
<script src="js/index.js"></script>
<script src="js/validacion.js"></script>
        <?php
    } else{
        echo "<script>alert('USUARIO NO ENCONTRADO EN LA BASE DE DATOS');</script>";
        echo "<script> window.location.replace('./index.html'); </script>";
        $conexion->close();
    }


};
?>