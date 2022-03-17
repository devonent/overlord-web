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
                            'id' => 'form-detail-monitor',
                            'class' => 'form form-vertical'
                        );
                        echo form_open_multipart('panel/editar_monitor', $data);
                    ?>
                        <div class="form-body">
                            <div class="row">
                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4 text-center container-fluid">
                                    <div class="product-picture me-3">
                                        <img class="img-fluid" src="<?= base_url('img/products/'. $monitor_details->imagen) ?>" alt="imagen_producto" id="imagen-producto-previsualizacion">
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
                                
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label mb-0">Marca*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'marca'
                                            );
                                            echo form_dropdown('marca', ['' => 'Seleccionar-marca'] + $brands, $monitor_details->marca, $data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="modelo">Modelo*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'modelo',
                                                'name' => 'modelo',
                                                'placeholder' => 'Ingresa el modelo del monitor',
                                                'maxlength' => '100',
                                                'value' => $monitor_details->modelo
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-2"></span>
                                
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="acabado">Acabado/color*</label>
                                        <?php 
                                            $data = array (
                                                'class' => 'form-control',
                                                'id' => 'acabado',
                                                'name' => 'acabado',
                                                'placeholder' => 'Ingresa el acabado o color del monitor',
                                                'maxlength' => '50',
                                                'value' => $monitor_details->acabado_color
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label mb-0">Material de la carcasa*</label>
                                        <?php
                                            $data = array (
                                                'class' => 'form-select',
                                                'id' => 'material'
                                            );
                                            echo form_dropdown('material', ['' => 'Seleccionar-material-carcasa'] + $material, $monitor_details->material, $data);
                                        ?>
                                    </div>
                                </div>
                                
                                <!-- Separador -->
                                <span class="my-2"></span>

                                <div class="col-12 col-lg-4">
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
                                                    'value' => $monitor_details->stock
                                                );
                                                echo form_input($data);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="no_monitores">Número de monitores*</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-speaker"></i></span>
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control',
                                                    'id' => 'no_monitores',
                                                    'name' => 'no_monitores',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '10',
                                                    'value' => $monitor_details->no_monitores
                                                );
                                                echo form_input($data);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
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
                                                    'value' => $monitor_details->precio
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
                                        <label for="anchura">Anchura*</label>
                                        <div class="input-group">
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control text-right',
                                                    'id' => 'anchura',
                                                    'name' => 'anchura',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '2000',
                                                    'value' => $monitor_details->anchura_mm
                                                );
                                                echo form_input($data);
                                            ?>
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="altura">Altura*</label>
                                        <div class="input-group">
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control text-right',
                                                    'id' => 'altura',
                                                    'name' => 'altura',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '2000',
                                                    'value' => $monitor_details->altura_mm
                                                );
                                                echo form_input($data);
                                            ?>
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="profundidad">Profundidad*</label>
                                        <div class="input-group">
                                            <?php
                                                $data = array (
                                                    'class' => 'form-control text-right',
                                                    'id' => 'profundidad',
                                                    'name' => 'profundidad',
                                                    'type' => 'number',
                                                    'placeholder' => '-',
                                                    'step' => '1',
                                                    'min' => '0',
                                                    'max' => '2000',
                                                    'value' => $monitor_details->profundidad_mm
                                                );
                                                echo form_input($data);
                                            ?>
                                            <span class="input-group-text">mm</span>
                                        </div>
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
                                                'value' => $monitor_details->descripcion
                                            );
                                            echo form_textarea($data);

                                            $data = array (
                                                'type' => 'hidden',
                                                'class' => 'form-control',
                                                'id' => 'id_monitor',
                                                'name' => 'id_monitor',
                                                'value' => $monitor_details->id_monitor
                                            );
                                            echo form_input($data);
                                        ?>
                                    </div>
                                </div>

                                <!-- Separador -->
                                <span class="my-3"></span>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Actualizar</button>
                                    <a class="btn btn-light-secondary me-1 mb-1" type="reset" href="<?= base_url('panel/monitores') ?>">Cancelar</a>
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
    <script src="<?= base_url('panel_resources/assets/js/views/monitors-detail-validate.js') ?>"></script>
<?= $this->endSection() ?>