<!-- Modal -->
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
                        <div class="col-6">
                            <label class="form-label">Nombre Mascota</label>
                            <input class="form-control" id="nombre" name="nombre"
                                placeholder="Ingresa Nombre Mascota" />
                        </div>
                        <div class="col-6">
                            <label class="form-label">Edad Mascota</label>
                            <input class="form-control" id="edad" name="edad" placeholder="Ingresa Edad Mascota" />
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