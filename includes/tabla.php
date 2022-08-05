<?php

include_once "../conexion/conexion.php";
$sentencia = $base_de_datos->query("select id, nombre, edad from mascotas");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>



<div class="container-fluid mt-2">

    <div class="row my-4">

        <div class="col-6">
            <h1>LISTADO MASCOTAS</h1>
        </div>

        <div class="col-6 d-grid gap-2 d-md-flex justify-content-md-end mb-2 mt-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">Agregar
                Mascota <i class="bi bi-person-plus"></i></button>
        </div>
    </div>


<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table id="lista_mascotas" class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th style="width:300px;">Accion</th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach($mascotas as $mascota){ ?>
                    <tr>
                        <td><?php echo $mascota->id ?></td>
                        <td><?php echo $mascota->nombre ?></td>
                        <td><?php echo $mascota->edad ?></td>
                        <td class="text-center"><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id?>">Editar 📝</a>
                        
                        <a href="#" class="btn btn-danger btn_eliminar">Eliminar 🗑️</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script src="js/eliminar.js"></script>
<script>

$(document).ready(function() {
    $('#lista_mascotas').DataTable({
        "order": [
            [0, "desc"]
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }
    });

});

</script>