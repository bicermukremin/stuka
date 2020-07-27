<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="col-md-12 col-12 header-ust">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-6 header-slogan"><?php the_field('header_site_slogani', 'option') ?>
                </div>
                <div class="col-md-3 col-sm-2 col-6 header-telefon"><i class="fas fa-phone-volume"></i>
                    <?php the_field('header_telefon', 'option') ?>
                </div>
                <div class="col-md-3 col-sm-2 col-6 header-mail"><i class="fas fa-envelope"></i> <a
                        href="mailto:<?php the_field('header_mail_adresi', 'option') ?>"><?php the_field('header_mail_adresi', 'option') ?></a>
                </div>
                <div class="col-md-3 col-sm-5 col-6 header-sosyal">
                    <ul class="list-unstyled">
                        <?php
                        $facebook = get_field('header_facebook_adresi', 'option');

                        if ($facebook) : ?>
                        <li><a href="<?php the_field('header_facebook_adresi', 'option') ?>"><i
                                    class="fab fa-facebook"></i></a></li>
                        <?php endif ?>
                        <?php

                        $twitter = get_field('header_twitter_adresi', 'option');

                        if ($twitter) : ?>
                        <li><a href="<?php the_field('header_twitter_adresi', 'option') ?>"><i
                                    class="fab fa-twitter"></i></a></li>
                        <?php endif ?>
                        <?php
                        $linkedin = get_field('header_linkedin_adresi', 'option');

                        if ($linkedin) : ?>
                        <li><a href="<?php the_field('header_linkedin_adresi', 'option') ?>"><i
                                    class="fab fa-linkedin"></i></a></li>
                        <?php endif ?>
                        <?php
                        $instagram = get_field('header_instagram_adresi', 'option');

                        if ($instagram) : ?>
                        <li><a href="<?php the_field('header_instagram_adresi', 'option') ?>"><i
                                    class="fab fa-instagram"></i></a></li>
                        <?php endif ?>
                        <?php
                        $youtube = get_field('header_youtube_adresi', 'option');

                        if ($youtube) : ?>
                        <li><a href="<?php the_field('header_youtube_adresi', 'option') ?>"><i
                                    class="fab fa-youtube"></i></a></li>
                        <?php endif ?>
                        <?php
                        $google = get_field('header_google_adresi', 'option');

                        if ($google) : ?>
                        <li><a href="<?php the_field('header_google_adresi', 'option') ?>"><i
                                    class="fab fa-google"></i></a></li>
                        <?php endif ?>


                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="container header-alani">
        <div class="row">
            <?php $logo = get_field('site_logosu', 'option'); ?>
            <div class="col-md-2 col-sm-3 col-6 header-logo"><a href="<?php the_field('logo_link', 'option') ?>"><img
                        src="<?php echo $logo['url']; ?>" class="img-fluid" alt="" /></a></div>
            <div class="col-md-10 col-sm-9 col-6 header-menu">

                <?php wp_nav_menu(array('theme_location' => 'anamenu', 'menu_class' => 'ana_menusu')); ?>



                <div class="mobile-menu">
                    <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class' => 'mobil_menusu')); ?>

                </div>
                <a href="#" class="mobile-menu-ackapa"><i class="fa fa-bars"></i></a>

            </div>



        </div>
    </div>