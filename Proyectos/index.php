<?php include "../conexion/config.php";?>
<?php require RUTAAPP . '/Proyectos/includes/header.php';?>
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
                        <input type="text" class="form-control" id="inscripcion"  value="Se genera automaticamente" readonly>
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
        <form action="index.php" id="frm_register" method="post">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3>David Jeremias Vasquez Hernandez</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex justify-content-end" id="fecha">
                    <p>Fecha:</p>
                    <div class="form-group">
                        <input type="date" class="form-control borders" id="fecha" placeholder="No. de Inscripción" name="fecha-hoy">
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
                                <input type="text" class="form-control spacing" id="borders" placeholder="Nombre y Apellidos" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="nombres">
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control spacing" id="borders" name="fechaNacimiento">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control spacing" id="borders" placeholder="Lugar donde ocurrió el nacimiento" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="lugarNacimiento">
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
                            <input type="text" class="form-control spacing" id="borders" placeholder="Departamento de nacimiento" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="departamentoNacimiento">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="spacing">Municipio de nacimiento:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Municipio de nacimiento" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="municipioNacimiento">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 d-flex justify-content-end">
                        <p class="spacing">Sexo:</p>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnSexo" id="exampleRadios1" value="Masculino">
                            <label class="form-check-label" for="exampleRadios1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnSexo" id="exampleRadios2" value="Femenino">
                            <label class="form-check-label" for="exampleRadios2">
                                Femenino
                            </label>
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
                            <input type="text" class="form-control spacing" id="borders" placeholder="Nombre y Apellidos" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="nombresMadre">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <p class="spacing">Edad:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Edad" maxlength="3" minlength="1" onkeypress="return valideKey(event);" name="edadMadre">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="spacing">Nacionalidad:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Nacionalidad" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" onfocus="validar()" name="nacionalidadMadre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="spacing">Número de documento de identificación:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Número de documento de identificación" maxlength="13" minlength="1" onpaste="return false" name="dpiMadre">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnMadre" id="exampleRadios1" value="DPI">
                            <label class="form-check-label" for="exampleRadios1">
                                DPI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnMadre" id="exampleRadios2" value="Cedula">
                            <label class="form-check-label" for="exampleRadios2">
                                Cédula de Vecindad y Constancia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnMadre" id="exampleRadios2" value="Pasaporte">
                            <label class="form-check-label" for="exampleRadios2">
                                Pasaporte
                            </label>
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
                            <input type="text" class="form-control spacing" id="borders" placeholder="Nombre y Apellidos" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="nombresPadre">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <p class="spacing">Edad:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Edad" maxlength="3" minlength="1" onkeypress="return valideKey(event);" name="edadPadre">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="spacing">Nacionalidad:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Nacionalidad" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="nacionalidadPadre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="spacing">Número de documento de identificación:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Número de documento de identificación" maxlength="13" minlength="1" onpaste="return false" name="dpiPadre">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnPadre" id="exampleRadios1" value="DPI">
                            <label class="form-check-label" for="exampleRadios1">
                                DPI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnPadre" id="exampleRadios2" value="Cedula">
                            <label class="form-check-label" for="exampleRadios2">
                                Cédula de Vecindad y Constancia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnPadre" id="exampleRadios2" value="Pasaporte">
                            <label class="form-check-label" for="exampleRadios2">
                                Pasaporte
                            </label>
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
                            <input type="text" class="form-control spacing" id="borders" placeholder="Nombre y Apellidos" maxlength="30" minlength="1" onkeypress="return sololetras(event)" onpaste="return false" name="nombresCompariente">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <p class="spacing">Número de documento de identificación:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Número de documento de identificación" maxlength="13" minlength="1" onpaste="return false" name="dpiCompariente">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnCompariente" id="exampleRadios1" value="DPI">
                            <label class="form-check-label" for="exampleRadios1">
                                DPI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnCompariente" id="exampleRadios2" value="Cedula">
                            <label class="form-check-label" for="exampleRadios2">
                                Cédula de Vecindad y Constancia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdbtnCompariente" id="exampleRadios2" value="Pasaporte">
                            <label class="form-check-label" for="exampleRadios2">   
                                Pasaporte
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md 3">
                        <p class="spacing">Dirección:</p>
                    </div>
                    <div class="col-md-9 mr-5 mb-5">
                        <div class="form-group">
                            <input type="text" class="form-control spacing" id="borders" placeholder="Dirección" maxlength="70" minlength="1" name="direccion">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -5%;">   
                <small>Declaro que la información consignada en la presente solicitud de Inscripción de Nacimiento es verídica y correcta a la fecha de hoy. Entiendo y acepto que el Registro Nacional de las Personas -RENAPNO es responsable de información errónea, incongruente y/o inconsistente proporcionada por el compareciente de manera directa o indirecta que pueda inducir a error en la inscripción solicitada.</small>
            </div> <br><br>
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
                            <input type="submit" class="btn btn-warning inline" name="btn_guardar" id="btn_guardar" style="margin-left: -250%;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php require RUTAAPP . '/Proyectos/includes/footer.php'; ?>