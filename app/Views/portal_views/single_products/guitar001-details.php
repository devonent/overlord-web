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
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-01.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-01.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-02.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-02.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-03.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-03.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-04.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-04.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-05.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-05.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-06.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-06.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-07.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-07.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-08.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-08.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-09.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-09.jpg') ?>" alt="">
                            </a>
                        </div>
                        <div class="single-prd-item">
                            <a href="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-10.jpg') ?>" class="img-pop-up">
                                <img class="img-fluid" src="<?= base_url('portal_resources/img/product/guitars/guitar001/guitar001-10.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h1><strong>Gibson SG Standard</strong></h1>
                        <h3>Heritage Cherry</h3>
                        <div class="mt-4 mb-3">
                            <h2 class="mb-0">$33,749.99</h2>
                            <h6 class="l-through">$37,499.99</h6>
                        </div>
                        <ul>
                            <li>Oferta válida hasta : 12/02/2022</li>
                            <li>Categoría : <a href="<?= base_url('/instrumentos/guitarras') ?>" style="color: var(--secondary-color);">Guitarras</a></li>
                            <li>Stock : 3</li>
                        </ul>
                        <p class="mb-4">
                            Todo guitarrista reconoce una icónica Gibson SG cuando la ve. Con un mástil de caoba, dos Gibson 490 humbucker y un cuerpo elegante 
                            basado en los modelos SG de los '60s, esta guitarra representa lo mejor de la historia y del ahora,con un diseño clásico y 
                            características modernas.
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
                    <p>Sin rivalidad. Ha aparecido en innumerables bandas a lo largo de los años, en géneros que van desde el blues hasta el hard rock y más allá. Con un cuerpo más delgado que la Les Paul y ofreciendo una experiencia de interpretación totalmente diferente, la Gibson SG es una guitarra icónica que revolucionó el diseño de guitarras tal como lo conocemos. Ahora puedes experimentar la emoción de tocar esta guitarra feroz, ardiente e impecable, que tiene un diseño y características actualizados.<br><br>El equipo de ensueño de las pastillas de estilo vintage, cada humbucker en este SG Standard brilla con vitalidad. Hay un 490T en la posición del puente, que es el humbucker perfecto para golpes de ritmo. Con un rango medio superior enfatizado y una respuesta de agudos, le dará a cada nota que toques esa nitidez que lleva tus riffs al paraíso del rock. Tus acordes cantarán con definición y tus licks tararearán armónicamente. En esencia, su sonido sonará como una campana, ya sea usando una ganancia crujiente o una configuración limpia y prístina.<br><br>Cambia al mástil y es una historia sónica diferente. El 490R tiene un rendimiento ligeramente más bajo y hace que el líder gima de emoción. Tus licks cantarán a las estrellas, con una respuesta completa y una excelente articulación. En combinación con cuatro perillas para control de volumen y tono, así como un simple interruptor de palanca, su sonido estará firmemente en sus manos.<br><br>Una obra maestra moderna. Con un mástil hecho de caoba, esta guitarra está lista para brindarte toda la jugabilidad que puedas desear. Tiene una hermosa y cálida resonancia, por lo que tus notas estarán bañadas en saturación y tendrán un timbre potente y bien redondeado. También ofrece montañas de sostenido para obtener el mejor sonido cuando estás doblando notas y tocando acordes.<br><br>Libera tus lametones. El palisandro es una madera especial y constituye un diapasón inmenso. Descubrirás que su suavidad no conoce límites mientras tus dedos vuelan a lo largo de su superficie prístina. Además de ofrecer una resonancia bien redondeada, sus notas saltarán y electrificarán sus oídos cuando toque a lo largo de este camino de madera finamente elaborado.<br><br>El jugador moderno. Para una guitarra clásica, el estándar Gibson SG realmente está adornado con características modernas. El puente Nashville Tune-O-Matic de aluminio y la barra de tope de aluminio son los mejores de la gama, manteniendo la estabilidad y la afinación de las cuerdas bajo control. Una tuerca Graph Tech se encuentra en el extremo del clavijero de la guitarra, lo que ayuda a que las cuerdas alcancen la resonancia perfecta para ese tono mágico de Gibson.<br><br>Asegurándose de que la afinación esté completamente bloqueada, los afinadores Grover Rotomatic de clase mundial también brindan una hermosa estética para combinar con el clavijero. Rematado con un golpeador negro de cara completa de 5 capas y montañas de puro carisma, el SG Standard no tiene igual.</p>
                </div>
                <div class="tab-pane fade  show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                        <h5>Gibson</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Modelo</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>SG Standard</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Acabado/color</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Heritage Cherry</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Cuerpo</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Caoba</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Puente</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Nashville Tune-O-Matic de aluminio</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Mástil</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Caoba</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Diapasón</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>Palo de rosa</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>No. Trastes</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>22</h5>
                                    </td>
                                </tr>
                                <!-- elemento -->
                                <tr>
                                    <td>
                                        <h5>Controles</h5>
                                    </td>
                                    <td>
                                        <!-- editable -->
                                        <h5>1 volumen de mástil, 1 volumen de puente, 1 tono de mástil, 1 tono de puente, 1 selector de pastillas de 3 estados</h5>
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
                                        <h5>Trapezoides de acrílico</h5>
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
                                        <h5>490R</h5>
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
                                        <h5>490T</h5>
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