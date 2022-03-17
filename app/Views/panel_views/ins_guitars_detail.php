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
                            'id' => 'form-detail-guitar',
                            'class' => 'form form-vertical'
                        );
                        echo form_open_multipart('panel/editar_guitarra', $data);
                    ?>
                        <div class="form-body">
                            <div class="row">
                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4 text-center container-fluid">
                                    <div class="product-picture me-3">
                                        <img class="img-fluid" src="<?= base_url('img/products/'. $guitar_details->imagen) ?>" alt="imagen_producto" id="imagen-producto-previsualizacion">
                                    </div>
                                </div>

                                 <!-- Separador -->
                                 <span class="my-2"></span>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="imagen-producto" class="form-label mb-0">Foto de producto</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'imagen-producto',
                                                'name' => 'imagen-producto',
                                                'accept' => '.png, .jpeg, .jpg'
                                            );
                                            echo form_upload($data);
                                        ?>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-2"></span>
                                
                                <div class="col-12 col-lg-4">
                                <div class="form-group">
                                        <label class="form-label mb-0">Marca*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'marca',
                                            );
                                            echo form_dropdown('marca', ['' => 'Seleccionar-marca'] + $brands, $guitar_details->marca, $data);
                                        ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="modelo">Modelo*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'modelo',
                                                'name' => 'modelo',
                                                'placeholder' => 'Ingresa el modelo de la guitarra',
                                                'maxlength' => '100',
                                                'value' => $guitar_details->modelo
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="acabado">Acabado/color*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'acabado',
                                                'name' => 'acabado',
                                                'placeholder' => 'Ingresa el acabado o color de la guitarra',
                                                'maxlength' => '50',
                                                'value' => $guitar_details->acabado_color
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>
                                
                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="stock">Unidades disponibles*</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-archive"></i></span>
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control',
                                                    'id' => 'stock',
                                                    'name' => 'stock',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '1000',
                                                    'value' => $guitar_details->stock
                                                );
                                                echo form_input($data);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="no_trastes">Número de trastes*</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-layout-split"></i></span>
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control',
                                                    'id' => 'no_trastes',
                                                    'name' => 'no_trastes',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '40',
                                                    'value' => $guitar_details->no_trastes
                                                );
                                                echo form_input($data);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="no_cuerdas">Número de cuerdas*</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-list"></i></span>
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control',
                                                    'id' => 'no_cuerdas',
                                                    'name' => 'no_cuerdas',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '30',
                                                    'value' => $guitar_details->no_cuerdas
                                                );
                                                echo form_input($data);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="precio">Precio (MXN)*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control',
                                                    'id' => 'precio',
                                                    'name' => 'precio',
                                                    'type' => 'number',
                                                    'placeholder' => '-.--',
                                                    'step' => '.01',
                                                    'min' => '0',
                                                    'max' => '9999999.99',
                                                    'value' => $guitar_details->precio
                                                );
                                                echo form_input($data);
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label mb-0">Material del cuerpo*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'material_cuerpo'
                                            );
                                            echo form_dropdown('material_cuerpo', ['' => 'Seleccionar-material-del-cuerpo'] + $body, $guitar_details->cuerpo, $data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label mb-0">Material del mástil*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'material_mastil'
                                            );
                                            echo form_dropdown('material_mastil', ['' => 'Seleccionar-material-del-mástil'] + $neck, $guitar_details->mastil, $data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label mb-0">Material del diapasón*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'material_diapason'
                                            );
                                            echo form_dropdown('material_diapason', ['' => 'Seleccionar-material-del-diapasón'] + $fretboard, $guitar_details->diapason, $data);
                                        ?>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-2"></span>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción del producto*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'descripcion',
                                                'name' => 'descripcion',
                                                'placeholder' => 'Ingresa la descripción del producto que se mostrará en el portal',
                                                'value' => $guitar_details->descripcion
                                            );
                                            echo form_textarea($data);

                                            $data = array (
                                                'type' => 'hidden',
                                                'class' => 'form-control',
                                                'id' => 'id_guitarra',
                                                'name' => 'id_guitarra',
                                                'value' => $guitar_details->id_guitarra
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-3"></span>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Actualizar</button>
                                    <a class="btn btn-light-secondary me-1 mb-1" type="reset" href="<?= base_url('panel/guitarras') ?>">Cancelar</a>
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
    s<script src="<?= base_url('panel_resources/assets/js/views/guitars-detail-validate.js') ?>"></script>
<?= $this->endSection() ?>