<?php get_header() ?>


<div class="container sayfa-kutusu">

    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-12 margin-top-30 margin-bottom-30">
            <h2 style="text-align: center;"><?php the_title() ?></h2>
            <?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid margin-bottom-30')); ?>
            <?php the_content() ?>

        </div>
        <?php endwhile ?>



    </div>






</div>



<div class="clearfix"></div>


<?php get_footer() ?>