<?php
 include "../conexion/config.php";
include "../conexion/conexion.php";
require RUTAAPP . '/Proyectos/includes/header.php';

$noregister = $_POST['busqueda'];
$sql = "SELECT * FROM actas WHERE noRegistro='$noregister'";
$ejecutar = mysqli_query($conexion,$sql);
while ($fila = mysqli_fetch_array($ejecutar)) {
?>
    <br>
    <div class="container sub">
        <div class="row">
            <div class="col-md-4">
                <img src="../librerias/img/logo2.png" width="300" alt="">
            </div>

            <div class="col-md-3">
            </div>

            <div class="col-md-5 inline">
                <p>No. Inscripción:</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inscripcion" value="<?php echo $fila[0];?>" readonly>
                    </div>
                </form>
                <img src="../librerias/img/nac.png" width="130" height="90" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h1>Solicitud de Inscripción De Nacimiento</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h3>Registro Nacional De Las Personas -RENAP-</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h3>Registro Civil De Personas</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-end" id="fecha">
                <p>Fecha:</p>
                <div class="form-group">
                    <input type="text" class="form-control borders" id="fecha" value="<?php echo $fila[1];?>" readonly>
                </div>
            </div>
        </div>

        <div class="container pl-5">

            <div class="row">
                <div class="col-md-11">
                    <p>Respetuosamente solicito al Registrador Civil de las Personas realizar Inscripción de Nacimiento de conformidad a los siguientes datos:</p>
                    <u><strong>1. DATOS DE LA PERSONA MENOR DE EDAD:</strong></u>
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <p class="spacing">Nombres y Apellidos:</p>
                    <p class="spacing">Fecha de nacimiento:</p>
                    <p class="spacing">Lugar donde ocurrió el nacimiento:</p>
                </div>
                <div class="col-md-9 mr-5">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Nombre y Apellidos" value="<?php echo $fila[2];?>" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[3];?>" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[4];?>" readonly>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p class="spacing">Departamento de nacimiento:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[5];?>" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="spacing">Municipio de nacimiento:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[6];?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 d-flex justify-content-end">
                    <p class="spacing">Sexo:</p>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="borders" value="<?php echo $fila[7];?>" readonly>
                    </div>
                </div>
            </div>
            <!-- termina hijo-->
            <!--Madre-->
            <div class="row">
                <div class="col-md-11 mt-1">
                    <u><strong>2. DATOS DE LA MADRE:</strong></u>
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <p class="spacing">Nombres y Apellidos:</p>
                </div>
                <div class="col-md-9 mr-5">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[8];?>" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p class="spacing">Edad:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[9];?>" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="spacing">Nacionalidad:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[10];?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="spacing">Número de documento de identificación:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[11];?>" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="borders" value="<?php echo $fila[12];?>" readonly>
                    </div>
                </div>
            </div>
            <!-- termina madre-->

            <div class="row">
                <div class="col-md-11 mt-1">
                    <u><strong>3. DATOS DE LA PADRE:</strong></u>
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <p class="spacing">Nombres y Apellidos:</p>
                </div>
                <div class="col-md-9 mr-5">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[13];?>" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p class="spacing">Edad:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[14];?>" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="spacing">Nacionalidad:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[15];?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="spacing">Número de documento de identificación:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[16];?>" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="borders" value="<?php echo $fila[17];?>" readonly>
                    </div>
                </div>
            </div>
            <!-- termina padre-->

            <div class="row">
                <div class="col-md-12 mt-1">
                    <u><strong>4. DATOS DEL COMPARIENTE:</strong></u>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <small>(Consignar información si comparece a realizar la inscripción persona distinta al padre y/o la madre)</small>
                </div>
            </div>

            <div class="row">
                <div class="col-md 3">
                    <p class="spacing">Nombres y Apellidos:</p>
                </div>
                <div class="col-md-9 mr-5">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[18];?>" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p class="spacing">Número de documento de identificación:</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[19];?>" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="borders" value="<?php echo $fila[20];?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md 3">
                    <p class="spacing">Dirección:</p>
                </div>
                <div class="col-md-9 mr-5 mb-5">
                    <div class="form-group">
                        <input type="text" class="form-control spacing" id="borders" value="<?php echo $fila[21];?>" readonly>
                    </div>
                    <small>Declaro que la información consignada en la presente solicitud de Inscripción de Nacimiento es verídica y correcta a la fecha de hoy. Entiendo y acepto que el Registro Nacional de las Personas -RENAPNO es responsable de información errónea, incongruente y/o inconsistente proporcionada por el compareciente de manera directa o indirecta que pueda inducir a error en la inscripción solicitada.</small>
                </div>
            </div>
            <!-- termina compariente-->
            <div class="container ml-5">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3 ml-3">
                        <p><b>F._______________________________________</b></p>
                        <p class="ml-5"><b>Madre o Compariente</b></p>
                    </div>

                    <div class="col-md-3 ml-5">
                        <p><b>F._______________________________________</b></p>
                        <p class="ml-5"><b>Padre o Compariente</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <?php
}
require RUTAAPP . '/Proyectos/includes/footer.php'; 
?>