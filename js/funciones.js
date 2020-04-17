function agregar_datos() {
    var datos = $("#frm_register").serialize();

    $.ajax({
        method: "POST",
        url: "../Proyectos/insertar.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("Registro exitoso");
            } else {
                alert("Error de Registro");
            }
        }
    });
    return false;
}