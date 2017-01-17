<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <!-- section that calls in 3 blog posts -->
       <?php query_posts('showposts=3&post_type=post'); ?>

        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      
          get_template_part( 'content', get_post_format() );
    
        endwhile; endif; 
        ?>

        <?php rewind_posts(); ?> <!-- resets the wp loop -->
      <!--end of blog post section -->

    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>

