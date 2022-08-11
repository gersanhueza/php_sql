$(document).ready(function () {

    $(document).on("click", ".btn_editar", function () {

        console.log("prueba");

        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text());

        $('#id_editar').val(id);

        $.ajax({
            type: "POST",
            url: "includes/procesa_cargar.php",
            data: {id},

            success: function (a) {
                console.log(a)
                var data = JSON.parse(a);

                $('#nombre_editar').val(data.nombre);
                $('#edad_editar').val(data.edad);
                $('#fecha_editar').val(data.fecha);
                $('#editar').modal('show');
            }
        });

       
    });

    $('#btn_modificar').click(function (e) {

        var nombre  = $("#nombre_editar").val();
        var edad    = $("#edad_editar").val();
        var fecha   = $("#fecha_editar").val();
        var id      = $("#id_editar").val();

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
                url: "includes/procesa_modificar.php",
                data: {
                    nombre,
                    edad,
                    fecha,
                    id
                },

                success: function (a) {

                    console.log(a);

                    if (a == 1) {

                        Swal.fire({
                            title: 'AVISO',
                            position: 'top',
                            allowOutsideClick: false,
                            text: "Registro Actualizado Correctamente",
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#editar').modal('hide');
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