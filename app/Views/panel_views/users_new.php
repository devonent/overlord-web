<?= $this->extend('panel_views/templates/base_panel') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre(s)*</label>
                                    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingresa tu(s) nombre(s)">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="apellido-paterno">Apellido paterno*</label>
                                    <input type="text" id="apellido-paterno" class="form-control" name="apellido_p" placeholder="Ingresa tu apellido paterno">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="apellido-materno">Apellido materno*</label>
                                    <input type="text" id="apellido-materno" class="form-control" name="apellido_m" placeholder="Ingresa tu apellido materno">
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="form-label">Seleccionar uno o más roles*</label>
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox1" class="form-check-input" >
                                        <label for="checkbox1">Administrador</label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox2" class="form-check-input" >
                                        <label for="checkbox1">Operador</label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox3" class="form-check-input" >
                                        <label for="checkbox1">Usuario</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Ingresa tu email">
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="pass">Contraseña*</label>
                                    <input type="password" id="pass" class="form-control" name="contact" placeholder="Ingersa tu contraseña">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="pass-confirm">Confirmar contraseña*</label>
                                    <input type="password" id="pass-confirm" class="form-control" name="contact" placeholder="Confirma tu contraseña">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="formFile" class="form-label mb-0">Foto de perfil</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary me-1 mb-1">Registrar</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
   
<?= $this->endSection() ?>