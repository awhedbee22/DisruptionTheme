<div id="slider" class="owl-carousel">

    <?php
        $owlSlider = array(
          'post_type'      => 'NAME'
        );
        $my_query = new WP_Query( $owlSlider );
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID;
    ?>

        <div>
            <h2><?php the_title(); ?></h2>
        </div>

    <?php endwhile; ?>
    
</div>
