<?= $this->extend('panel_views/templates/base_panel') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- <form class="form form-vertical"> -->
                    <?php
                        $data = array(
                            'id' => 'form-new-user',
                            'class' => 'form form-vertical'
                        );
                        echo form_open_multipart('panel/registrar_nuevo_usuario', $data);
                    ?>
                        <div class="form-body">
                            <div class="row">
                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4 text-center container-fluid">
                                    <div class="avatar avatar-profile me-3">
                                        <img class="img-fluid" src="<?= base_url('panel_resources/assets/images/faces/avatar-none.jpg') ?>" alt="imagen_perfil" id="imagen-perfil-previsualizacion">
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-4"></span>
                                
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="nombre">Nombre(s)*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'nombre',
                                                'name' => 'nombre',
                                                'placeholder' => 'Ingresa tu(s) nombre(s)',
                                                'maxlength' => '45'
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="apellido-paterno">Apellido paterno*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'apellido-paterno',
                                                'name' => 'apellido-paterno',
                                                'placeholder' => 'Ingresa tu apellido paterno',
                                                'maxlength' => '45'
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="apellido-materno">Apellido materno*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'apellido-materno',
                                                'name' => 'apellido-materno',
                                                'placeholder' => 'Ingresa tu apellido materno',
                                                'maxlength' => '45'
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>
                                
                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label mb-0">Selecciona un rol*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'rol'
                                            );
                                            echo form_dropdown('rol', ['' => 'Seleccionar-rol'] + $roles, array(), $data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="email">Correo electrónico*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'email',
                                                'name' => 'email',
                                                'placeholder' => 'Ingresa tu correo electrónico',
                                                'maxlength' => '60'
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label mb-0 ">Selecciona un sexo*</label><br>
                                        <div class="form-check mt-2 me-3 d-inline-block">
                                            <?php
                                                $data = array (
                                                    'id' => 'femenino',
                                                    'name' => 'sexo',
                                                    'class' => 'form-check-input'
                                                );
                                                echo form_radio($data, FEMALE_SEX);
                                            ?>
                                            <label for="femenino" class="form-check-label">Femenino</label>
                                        </div>
                                        <div class="form-check m-2 d-inline-block">
                                            <?php
                                                $data = array (
                                                    'id' => 'masculino',
                                                    'name' => 'sexo',
                                                    'class' => 'form-check-input'
                                                );
                                                echo form_radio($data, MALE_SEX);
                                            ?>
                                            <label for="masculino" class="form-check-label">Masculino</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contrasenia">Contraseña*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'contrasenia',
                                                'name' => 'contrasenia',
                                                'placeholder' => 'Ingresa tu contraseña',
                                                'maxlength' => '60'
                                            );
                                            echo form_password($data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="confirmar-contrasenia">Confirmar contraseña*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'confirmar-contrasenia',
                                                'name' => 'confirmar-contrasenia',
                                                'placeholder' => 'Confirma tu contraseña',
                                                'maxlength' => '60'
                                            );
                                            echo form_password($data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="imagen-perfil" class="form-label mb-0">Foto de perfil</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'imagen-perfil',
                                                'accept' => '.png, .jpeg, .jpg'
                                            );
                                            echo form_upload($data);
                                        ?>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
                                    <a class="btn btn-light-secondary me-1 mb-1" type="reset" href="<?= base_url('panel/usuarios') ?>">Cancelar</a>
                                </div>

                            </div>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
    <script src="<?= base_url('panel_resources/assets/js/views/users-new-validate.js') ?>"></script>
<?= $this->endSection() ?>