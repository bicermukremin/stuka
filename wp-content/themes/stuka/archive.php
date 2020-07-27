<?php get_header() ?>

<div class="container sayfa-kutusu">


    <h2>Haberlerimiz</h2>


    <div class="row">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
        <div class="col-md-4 hizmet-oge">
            <?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?>

            <div class="col-md-12 hizmet-oge-aciklama">
                <h3><?php the_title() ?></h3>
                <p><?php the_excerpt() ?></p>

                <div class="clearfix"></div>
            </div>
        </div>

        <?php endwhile ?>

        <?php else : ?>
        <p>Haber Eklenmemiştir.</p>

        <?php endif ?>



    </div>



</div>



<?php get_footer() ?>