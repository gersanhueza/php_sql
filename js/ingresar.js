$(document).ready(function () {

    $('#btn_guardar').click(function (e) {
        e.preventDefault();
        var nombre  = $("#nombre").val();
        var edad    = $("#edad").val();
        var fecha    = $("#fecha").val();

        if (nombre == "" ||
            edad == "" ||
            fecha == "") {

            Swal.fire({
                icon: 'error',
                title: 'FALTA ALGO',
                position: 'top',
                allowOutsideClick: false,
                text: 'RELLENE TODOS LOS CAMPOS'
            })

        } else {
            $.ajax({
                type: "POST",
                url: "includes/procesa_insertar.php",
                data: {
                    nombre,
                    edad,
                    fecha
                },

                success: function (a) {

                    console.log(a);

                    if (a == 1) {

                        Swal.fire({
                            title: 'AVISO',
                            position: 'top',
                            allowOutsideClick: false,
                            text: "Registro Ingresado Correctamente",
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                
                                $('#nombre').val("");
                                $('#edad').val("");
                                $('#fecha').val("");
                                $('#agregar').modal('hide');
                                lista_mascotas.ajax.reload(null, false);
                                
                            }

                        })

                        return false;

                    } else {

                        Swal.fire({
                            icon: 'error',
                            position: 'top',
                            allowOutsideClick: false,
                            title: 'Registro no Ingresado',
                            text: 'Verifique algun caracter no valido en los campos'
                        })

                        return false;

                    }
                    
                }
            });

        }
    });
});