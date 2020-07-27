	<div class="container-fluid footer-alani">

	    <div class="container">
	        <div class="row">

	            <div class="col-md-3">

	                <h4><?php the_field('1_bolum_baslik', 'option') ?></h4>
	                <?php $logo = get_field('1bolum_logo', 'option'); ?>
	                <img src="<?php echo $logo['url'] ?>" class="footer-alani-logo img-fluid" alt="" />

	                <p><?php the_field('1_bolum_yazi', 'option') ?></p>

	                <ul class="list-unstyled footer-sosyal-menu">
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

	            <div class="col-md-3">

	                <h4><?php the_field('2_bolum_baslik', 'option') ?></h4>

	                <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'list-unstyled')); ?>


	            </div>

	            <div class="col-md-3">

	                <h4><?php the_field('3_bolum_baslik', 'option') ?></h4>

	                <div class="footer-bizdenhaberler">

	                    <?php
                        $habersayi = get_field('3bolum_haber_sayisi', 'option');
                        $args = array(
                            'post_type' => 'post',
                            'order_by' => 'date',
                            'posts_per_page' => $habersayi,
                        );

                        $wp_query = new WP_Query($args);

                        if ($wp_query->have_posts()) :

                            while ($wp_query->have_posts()) : $wp_query->the_post();

                        ?>
	                    <div class="footer-haber-oge">
	                        <div class="col-md-12">
	                            <div class="row">
	                                <div class="col-md-4 col-4 no-padding">
	                                    <?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?>
	                                </div>
	                                <div class="col-md-8 col-8">
	                                    <span><?php the_date() ?></span>
	                                    <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <?php endwhile ?>
	                    <?php endif ?>


	                </div>

	            </div>

	            <div class="col-md-3">

	                <h4><?php the_field('4_bolum_baslik', 'option') ?></h4>

	                <?php
                    $etiketsayi = get_field('4_bolum_etiket_sayisi', 'option');
                    $etiketler = get_tags(array('number'  => $etiketsayi));


                    foreach ($etiketler as $etiket) : ?>

	                <span class="etiket"><?php echo $etiket->name; ?></span>

	                <?php endforeach ?>
	            </div>

	            <div class="clearfix"></div>

	            <div class="col-md-12 footer-copy">Stuka Wordpress Teması</div>

	        </div>

	    </div>
	</div>
	<?php wp_footer(); ?>
	</body>

	</html>