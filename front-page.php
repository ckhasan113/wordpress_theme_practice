<?php

/**
 * Theme Front Page
 */
get_header(); ?>



<section id="service_area">
  <div class="container">
    <div class="row">

      <?php
      query_posts('post_type=service&post_status=publish&posts_per_page=2&order=ASC&paged=' . get_query_var('post')); ?>

      <?php get_template_part('template_part/page_nav'); ?>

      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <div class="col-md-4">
            <div class="child_service">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('service'); ?></a>
              <?php the_excerpt(); ?>
            </div>
          </div>

      <?php
        endwhile;
      endif;
      ?>
    </div>

    <?php get_template_part('template_part/page_nav'); ?>

    <!-- <div id="page_nav">
      <?php if ('mh_pagenav') {
        mh_pagenav();
      } else { ?>
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>
      <?php } ?>
    </div> -->

  </div>
</section>





<?php get_footer(); ?>
