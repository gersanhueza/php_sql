<!-- Modal ingresar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Mascota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Nombre Mascota</label>
                            <input class="form-control" id="nombre" name="nombre"
                            placeholder="Ingresa Nombre Mascota" />

                            <label class="form-label">Edad Mascota</label>
                            <input class="form-control" id="edad" name="edad"
                            placeholder="Ingresa Edad Mascota" />

                            <label class="form-label">Edad Mascota</label>
                            <input class="form-control" id="fecha" type="date" name="fecha"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btn_guardar">Agregar</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Mascota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <input id="id_editar" type="hidden"/>

                            <label class="form-label">Nombre Mascota</label>
                            <input class="form-control" id="nombre_editar" type="text" name="nombre_editar"
                                placeholder="Ingresa Nombre Mascota" />

                            <label class="form-label">Edad Mascota</label>
                            <input class="form-control" id="edad_editar" type="number" name="edad_editar" placeholder="Ingresa Edad Mascota" />

                            <label class="form-label">Edad Mascota</label>
                            <input class="form-control" id="fecha_editar" type="date" name="fecha_editar"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btn_modificar">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Exportar -->

<div class="modal fade" id="exportar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Exportar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="reportes/ecxe_grabaciones.php" method="POST">

          <div class="container-fluid">
            
            <div class="row">

              <div class="col-lg-6">

                <label><strong>Inicio</strong></label>

                <input type="date" name="min" class="form-control">

              </div>

              <div class="col-lg-6">

                <label><strong>Fin</strong></label>

                <input type="date" name="max" class="form-control">

              </div>

            </div>

          </div>

          <div class="d-flex justify-content-end align-items-end my-2 p-3">
            <button type="submit" class="btn shadow-none btn-success">EXPORTAR</button>
          </div>
          
          </form>

      </div>
      
    </div>
  </div>
</div>

