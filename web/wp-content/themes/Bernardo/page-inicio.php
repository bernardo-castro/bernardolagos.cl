<?php get_header(); ?>

    <div class="pagepiling" style="overflow: hidden; touch-action: none;">
        <div data-anchor="page1" class="pp-scrollable text-white section section-1 pp-section pp-easing active"
             style="z-index: 8; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="section-bg"
                     style="background-image:url(<?php echo get_field('imagen_principal', get_the_ID())['url']; ?>"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title hidden-xs hidden-sm"><span>Inicio</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-6">
                                                <?php echo get_field('texto_principal', get_the_ID()) ?>
                                                <div class="hr-bottom">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="page2" class="pp-scrollable section section-2 pp-section pp-easing"
             style="z-index: 7; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title text-dark hidden-xs hidden-sm"><span>Me presento</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5">
                                                <p class="subtitle-top text-dark"><?php echo get_field('titulo_acerca', get_the_ID()) ?></p>
                                                <?php echo get_field('subtitulo_acerca', get_the_ID()) ?>
                                                <?php echo get_field('contenido_acerca', get_the_ID()) ?>

                                            </div>
                                            <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                                                <div class="dots-image-2">
                                                    <img alt="" class="img-responsive"
                                                         src="<?php echo get_field('imagen_acerca', get_the_ID())['url'] ?>">
                                                    <div class="dots"></div>
                                                    <div class="experience-info">
                                                        <div class="number text-primary"><?php echo (int)date('Y', strtotime('+1 year')) - 1987 -1;  ?></div>
                                                        <div class="text">
                                                            Años<br>de<br>Experiencia
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="page3" class="pp-scrollable text-white section section-3 pp-section pp-easing"
             style="z-index: 6; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="bg-changer">
                    <?php
                    $trabajos = get_field('trabajos', get_the_ID());
                    ?>

                    <?php foreach ($trabajos as $trabajo) { ?>
                        <div class="section-bg"
                             style="background-image:url(<?php echo $trabajo['imagen']['url'] ?>);"></div>
                    <?php } ?>
                </div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title hidden-xs hidden-sm"><span>Mis Trabajos</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="title-uppercase text-primary"><?php echo get_field('titulo_trabajo', get_the_ID()) ?></h2>
                                                <div class="row-project-box row">
                                                    <?php foreach ($trabajos as $trabajo) { ?>
                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                            <a href=""
                                                               class="project-box">
                                                                <div class="project-box-inner">
                                                                    <h5><?php echo $trabajo['titulo'] ?></h5>
                                                                    <div class="project-category hidden-xs hidden-sm">
                                                                        <?php echo $trabajo['subtitulo'] ?>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="page4" class="pp-scrollable section section-4 pp-section pp-easing"
             style="z-index: 5; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title text-dark hidden-xs hidden-sm"><span>Multimedia</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h4 class="title-uppercase text-primary"><?php echo get_field('titulo_multi', get_the_ID()) ?></h4>
                                        <div class="row" style="height: 250px">
                                            <div class="owl-carousel owl-theme"> <!--<h4>Negroson</h4>-->
                                                <?php
                                                $videos = get_field('registros', get_the_ID());
                                                foreach ($videos as $video) {
                                                ?>
                                                    <div class="item-video" data-merge="<?php echo $video["ancho"] ?>" data-title="<?php echo $video["titulo"] ?>">
                                                        <a class="owl-video" href="<?php echo $video["enlace"] ?>"></a>
                                                        <div class="item-video-title"><?php echo $video["titulo"] ?></div>
                                                    </div>
                                                <?php
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="page5" class="pp-scrollable text-white section section-6 pp-section pp-easing"
             style="z-index: 4; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="section-bg"
                     style="background-image:url(<?php echo get_field('imagen_educacion', get_the_ID())['url'] ?>);/*background-attachment: fixed;*/"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title hidden-xs hidden-sm"><span>Resumen</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <?php
                                            $experiencias = get_field('experiencias', get_the_ID());
                                            $educacion = get_field('educacion', get_the_ID());
                                            ?>
                                          
                                            <div class="col-md-12">
                                                <div class="col-resume">
                                                    <h6 class="resume-title">
                                                        <?php echo get_field('titulo_experiencias', get_the_ID()); ?>
                                                    </h6>
                                                    <div class="resume-content">
                                                        <div class="resume-inner">
                                                            <?php foreach ($experiencias as $value) { ?>
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type"><?php echo $value['titulo'] ?></h6>
                                                                    <p class="resume-study"><?php echo $value['lugar'] ?></p>
                                                                    <p class="resume-date text-primary"><?php echo $value['periodo'] ?></p>
                                                                    <p class="resume-text"><?php echo $value['contenido'] ?></p>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-anchor="page7" class="pp-scrollable text-white section section-6 pp-section pp-easing"
             style="z-index: 2; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url(<?php echo get_field('imagen_testi', get_the_ID())['url'] ?>);"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title hidden-xs hidden-sm"><span>testimonios</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-5">
                                                <span class="icon-quote ion-quote"></span>
                                                <h2 class="title-uppercase text-white"><?php echo get_field('frase', get_the_ID()) ?></h2>
                                            </div>
                                            <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2">
                                                <div class="review-carousel owl-carousel">
                                                    <?php
                                                    $testimonios = get_field('testimonios', get_the_ID());?>
                                                    <?php foreach ($testimonios as $value) { ?>
                                                    <div class="review-carousel-item">
                                                        <div class="text">
                                                            <?php echo $value['testimonio'] ?>
                                                        </div>
                                                        <div class="review-author">
                                                            <div class="author-name"><?php echo $value['autor'] ?></div>
                                                            <i><?php echo $value['cargo'] ?></i>
                                                        </div>
                                                        <div class="text">
                                                            <?php echo $value['respuesta'] ?>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div data-anchor="page8" class="pp-scrollable section section-6 pp-section pp-easing"
             style="z-index: 1; transform: translate3d(0px, 0px, 0px);">
            <div class="scroll-wrap">
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title text-dark hidden-xs hidden-sm"><span>Contacto</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro overflow-hidden">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="title-uppercase">Hagamos <span class="text-primary">música</span></h2>
                                                <div class="contact-info">
                                                    <form class="js-form" novalidate="novalidate">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="col-sm-12">
                                                                    <label>
                                                                    <span class="text-secondary">Nombre : </span><span class="text-primary"><?php echo get_field('nombre_contacto', get_the_ID()); ?></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12">

                                                                    <label>
                                                                    <span class="text-secondary">Correo : </span><span class="text-primary"><?php echo get_field('correo', get_the_ID()); ?></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-12">

                                                                    <label>
                                                                    <span class="text-secondary">Telefono : </span><span class="text-primary"><?php echo get_field('telefono', get_the_ID()); ?></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 col-sm-offset-2">
                                                                <div class="dots-image-2">
                                                                    <img alt="" class="img-responsive"
                                                                         src="<?php echo get_field('imagen_contacto', get_the_ID())['url']; ?>">
                                                                    <div class="dots">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
