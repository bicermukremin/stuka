<?php get_header() ?>


<div class="container sayfa-kutusu">

    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-9 margin-top-30 margin-bottom-30">
            <h2><?php the_title() ?></h2>

            <?php the_content() ?>

        </div>
        <?php endwhile ?>
        <div class="col-md-3 margin-top-30 margin-bottom-30 text-right">
            <h4>Diğer Haberler</h4>


            <ul class="list-unstyled hizmet-menusu">
                <?php
                $args = array(

                    'post_type' => 'post',
                    'order_by' => 'date',
                    'post__not_in' => array(get_the_ID()),
                );

                $wp_query = new WP_Query($args);
                while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                <?php endwhile ?>
            </ul>

        </div>


    </div>






</div>



<div class="clearfix"></div>


<?php get_footer() ?>