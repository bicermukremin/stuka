<?php get_header(); ?>

<div class="clearfix"></div>
<div class="col-md-12 slider-alani">

    <div class="row">
        <div class="owl-carousel anasayfa-slider owl-theme">
            <?php if (have_rows('slider_icerikleri', 'option')) :

                while (have_rows('slider_icerikleri', 'option')) : the_row();

                    $slider_gorsel = get_sub_field('slider_gorsel', 'option');
            ?>

            <div class="item owl-lazy" data-src="<?php echo $slider_gorsel['url'] ?>">
                <div class="container">
                    <div class="clearfix"></div>
                    <div class="slider-baslik-1"><?php the_sub_field('slider_baslik_1', 'option') ?></div>
                    <div class="slider-baslik-2"><?php the_sub_field('slider_baslik_2', 'option') ?></div>
                    <div class="slider-buton"><a href="<?php the_sub_field('slider_buton_link', 'option') ?>"
                            class="buton acik-mavi-buton"><?php the_sub_field('slider_buton_yazi', 'option') ?></a>
                    </div>
                </div>
            </div>

            <?php endwhile;
            else : endif; ?>




        </div>


    </div>

</div>

<div class="clearfix"></div>

<div class="container anasayfa-hizmetlerimiz">

    <div class="row">




        <div class="col-md-9 margin-top-30 margin-bottom-30">
            <h2><?php the_field('hizmetlerimiz_basligi', 'option') ?></h2>
            <p><?php the_field('hizmetlerimiz_yazi', 'option') ?></p>
        </div>

        <div class="col-md-3 margin-top-30 margin-bottom-30 text-right">

            <a href="<?php the_field('hizmetlerimiz_buton_link', 'option') ?>"
                class="buton mavi-buton"><?php the_field('hizmetlerimiz_buton_yazi', 'option') ?></a>

        </div>



        <div class="clearfix"></div>
        <?php
        $sayi = get_field('hizmetlerimiz_adet', 'option');
        $arg = array(
            'post_type' => 'hizmet',
            'order_by' => 'date',
            'posts_per_page' => $sayi
        );

        $wp_query = new WP_Query($arg);

        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-4 hizmet-oge">
            <?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?>

            <div class="col-md-12 hizmet-oge-aciklama">
                <h3><?php the_title() ?></h3>
                <p><?php the_excerpt() ?></p>

                <div class="clearfix"></div>
            </div>
        </div>

        <?php endwhile; ?>


    </div>

</div>

<div class="clearfix"></div>

<div class="container-fluid anasayfa-hakkimizda">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_field('baslik', 'option') ?></h2>

                    <p><?php the_field('hakkimizda_yazisi', 'option') ?></p>


                    <a href="<?php the_field('hakkimizda_buton_link', 'option') ?>"
                        class="buton acik-mavi-buton"><?php the_field('hakkimizda_buton_yazi', 'option') ?></a>


                </div>

                <div class="col-md-6">
                    <?php $hakkimizda = get_field('hakkimizda_gorsel', 'option'); ?>
                    <img src="<?php echo $hakkimizda['url'] ?>" class="img-fluid anasayfa-hakkimizda-foto" alt="" />

                </div>

            </div>
        </div>


    </div>
</div>

<div class="clearfix"></div>

<div class="container anasayfa-referanslarimiz">

    <div class="row">

        <div class="col-md-9 margin-top-30 margin-bottom-30">
            <h2><?php the_field('referans_baslik', 'option') ?></h2>
            <p><?php the_field('referans_yazi', 'option') ?></p>
        </div>

        <div class="col-md-3 margin-top-30 margin-bottom-30 text-right">

            <a href="<?php the_field('referans_buton_link', 'option') ?>"
                class="buton mavi-buton"><?php the_field('referans_buton_yazi', 'option') ?></a>

        </div>

        <div class="clearfix"></div>

        <?php
        $sayireferans = get_field('kac_adet_gosterilsin', 'option');
        $arg = array(
            'post_type' => 'referans',
            'order_by' => 'date',
            'posts_per_page' => $sayireferans
        );

        $wp_query = new WP_Query($arg);

        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-3 referans-oge">
            <a href="#" data-toggle="modal"
                data-target="#referans<?php the_ID() ?>"><?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?></a>
            <div class="modal fade" id="referans<?php the_ID() ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php the_title() ?></h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?>
                            <p><?php the_excerpt() ?></p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile ?>



    </div>

</div>
<?php $nedediler = get_field('ne_dediler_icerik', 'option');
if ($nedediler) :
    $nedediler_tek = $nedediler[array_rand($nedediler)];
?>

<div class="container-fluid anasayfa-nedediler">

    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <h2><?php the_field('ne_dediler_baslik', 'option') ?></h2>


                <div class="col-md-12 nedediler">

                    <p><?php echo $nedediler_tek['yazi'] ?></p>

                    <div class="nedediler-unvan">
                        <?php echo $nedediler_tek['isim'] ?><br><?php echo $nedediler_tek['sirket'] ?></div>

                    <div class="clearfix"></div>

                </div>

            </div>
            <div class="col-md-6 anasayfa-firmalar">

                <h2><?php the_field('bolum_baslik', 'option') ?></h2>

                <div class="row">
                    <?php


                        while (have_rows('bolum_icerik', 'option')) : the_row();

                            $firma_gorsel = get_sub_field('resim', 'option');
                        ?>
                    <div class="col-md-6"><a href="#" class="firma-oge"><img src="<?php echo $firma_gorsel['url'] ?>"
                                alt="" /></a>
                    </div>

                    <?php endwhile ?>
                </div>
            </div>

        </div>


    </div>


</div>
<?php endif ?>
<div class="clearfix"></div>

<div class="container anasayfa-haberler">

    <div class="row">

        <div class="col-md-9 margin-top-30 margin-bottom-30">
            <h2><?php the_field('haber', 'option') ?></h2>
            <p><?php the_field('haber_yazi', 'option') ?></p>
        </div>

        <div class="col-md-3 margin-top-30 margin-bottom-30 text-right">

            <a href="<?php the_field('haber_buton_link', 'option') ?>"
                class="buton mavi-buton"><?php the_field('haber_buton_yazi', 'option') ?></a>

        </div>

        <div class="clearfix"></div>
        <?php
        $sayihaber = get_field('kac_adet_gosterilsin', 'option');
        $arg = array(
            'post_type' => 'post',
            'order_by' => 'date',
            'posts_per_page' => $sayihaber
        );

        $wp_query = new WP_Query($arg);

        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-4 haber-oge">
            <a
                href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?></a>

            <div class="col-md-12 hizmet-oge-aciklama">
                <h3><?php the_title() ?></h3>
                <p><?php the_excerpt() ?></p>

                <div class="clearfix"></div>
            </div>

        </div>

        <?php endwhile ?>

    </div>

</div>


<div class="clearfix"></div>


</body>

</html>

<?php get_footer(); ?>