<?php /* Template Name: Bize Ulaşın*/ get_header() ?>


<div class="container sayfa-kutusu">

    <?php while (have_posts()) : the_post();
    ?>
    <h2><?php the_field('iletisim_baslik', 'option') ?></h2>

    <?php the_field('harita_kodu', 'option') ?>


    <div class="row">

        <div class="col-md-9">
            <h2><?php the_field('form_baslik', 'option') ?></h2>

            <?php echo do_shortcode('[contact-form-7 id="124" title="Contact form 1"]'); ?>

        </div>

        <div class="col-md-3">
            <h2><?php the_field('adres_baslik', 'option') ?></h2>
            <?php the_field('adres', 'option') ?>

            <?php the_field('telefon', 'option') ?>

            <a href="mailto:<?php the_field('e-posta', 'option') ?>"><?php the_field('e-posta', 'option') ?></a>

        </div>

    </div>

</div>


<?php endwhile ?>
<?php get_footer() ?>