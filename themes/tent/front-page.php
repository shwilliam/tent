<?php
/**
 * Template for front-page 
 *
 * @package tent
 */

get_header(); ?>

  <div id="primary">
		<main id="main" class="site__main" role="main">

			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content', 'page'); ?>
			<?php endwhile; ?>

      <h2>Inhabitent Journal</h2>
      <div class="flex">
        <?php
          $blog_posts = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          ));

          foreach ( $blog_posts as $post ) : setup_postdata( $post );
        ?>

          <?php get_template_part('template-parts/content', 'thumbnail'); ?>

        <?php
          endforeach; wp_reset_postdata();
        ?>
      </div>
        
		</main>
	</div>

<?php if (!has_block('tent/hero-image-header')) : get_sidebar(); endif; ?>
<?php get_footer(); ?>
