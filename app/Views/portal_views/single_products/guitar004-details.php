<?= $this->extend('portal_views/templates/base_portal') ?>

<?= $this->section('css') ?>
	<link rel="stylesheet" href="<?= base_url('portal_resources/css/magnific-popup.css') ?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1><?= $section_name ?></h1>
					<?= $breadcrumb ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Single Product Area =================-->
    <div class="product_image_area pt-4">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-01.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-01.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-02.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-02.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-03.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-03.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-04.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-04.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-05.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-05.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-06.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar004/guitar004-06.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h1><strong>Ibanez RG421AHM</strong></h1>
                        <h3>Blue Moon Burst</h3>
                        <div class="mt-4 mb-3">
                            <h2 class="mb-0">$9,199.99</h2>
                            <!-- <h6 class="l-through">$37,499.99</h6> -->
                        </div>
                        <ul>
                            <!-- <li>Oferta válida hasta : 12/02/2022</li> -->
                            <li>Categoría : <a href="<?= base_url('/instrumentos/guitarras') ?>" style="color: var(--secondary-color);">Guitarras</a></li>
                            <li>Stock : 3</li>
                        </ul>
                        <p class="mb-4">
                            Combinando sus características distintivas, como un aspecto nítido, humbuckers potentes y mástiles delgados, esta guitarra ha sido esculpida para ser versátil, adaptandose a cualquier tipo de música gracias a sus pastillas Quantum Humbucker.
                        </p>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="<?= base_url('instrumentos/guitarras') ?>">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripción</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Especificaciones</a>
                </li>
                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p><strong>Tono perfecto</strong></p>
                    <p>La RG421AHM es una gran guitarra para aquellos que no quieren apegarse a un determinado género, ya que este modelo tiene instaladas versátiles humbuckers Quantum. Aunque la guitarra se puede utilizar para múltiples géneros, las pastillas se diseñaron teniendo en cuenta la música pesada. Permiten claridad cuando se tocan riffs y los medios y agudos son potentes. El cuerpo de la guitarra también ayuda a darle a este instrumento un gran sonido, ya que la madera de fresno produce tonos brillantes y el acento clásico de Ibanez. Gracias a la conmutación de 5 vías, también puedes dar forma al tono como quieras. Encontrar el sonido que mejor se adapte a su estilo no requiere esfuerzo.</p>

                    <p><strong>Jugando suave</strong></p>
                    <p>Bien diseñado en un perfil Wizard III, este cuello está diseñado para brindar comodidad. La forma es delgada y plana, lo que es excelente para triturar, ya que le permite alcanzar los trastes con facilidad y tocar sin calambres en las manos. Construido con un material de arce resbaladizo, el mástil proporciona una base suave para que la mano se deslice por los trastes, lo que permite tocar con un ritmo rápido. El diseño no solo es cómodo, sino que también beneficia su sonido. Esta guitarra viene con veinticuatro trastes, lo que significa que tienes dos octavas en tu diapasón para jugar.</p>

                    <p><strong>Juega con estilo</strong></p>
                    <p>Destaca en el escenario gracias al llamativo color del instrumento y la forma bien elaborada del cuerpo. La madera de fresno liviana brinda comodidad al tocar, ya que no tiene que preocuparse por el peso de la guitarra mientras toca. Debido al puente fijo de la guitarra, tienes tanto la afinación como la estabilidad de las cuerdas, lo cual es ideal para estilos de punteo más duros y rasgueos. Este modelo también viene con un juego de cabezales de máquina con bloqueo Gotoh MG-T, que le permite cambiar las cuerdas a un ritmo rápido que coincida con el estilo rápido de la guitarra.</p>
                </div>
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Marca</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Ibanez</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Modelo</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>RG421AHM</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Acabado/color</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Blue Moon Burst</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Cuerpo</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Fresno</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Puente</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Fijo</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Mástil</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Arce</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Diapasón</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Arce</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>No. Trastes</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>24</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Controles</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>1 volumen, 1 tono, 1 selector de pastillas de 5 estados</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>No. Cuerdas</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>6</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Incrustaciones</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Puntos negros </h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Configuración de pastillas</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>HH</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Pastilla de mástil</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Quantum Humbucker</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Pastilla media</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>N/A</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Pastilla de puente</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Quantum Humbucker</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>