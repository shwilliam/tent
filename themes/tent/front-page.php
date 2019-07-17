<?php
/**
 * Template for front-page 
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('template-parts/content', 'page'); ?>
    <?php endwhile; ?>

    <h2>Shop Stuff</h2>
    <div class="flex">
      <?php
        $product_types_terms = get_terms(array(
          'taxonomy' => 'product-type',
          'count' => 4,
        ));

        foreach ($product_types_terms as $term) :
          $term_name = $term->name;
          $term_description = $term->description;
          $term_url = get_term_link($term);
          $term_icon_url =
            get_template_directory_uri().
            '/images/product-type__'.
            $term_name.
            '.svg';
        
          // load template part in this scope
          include(locate_template('template-parts/content-thumbnail-shop.php', false, false));
        
        endforeach;

      ?>
    </div>

    <h2>Inhabitent Journal</h2>
    <div class="flex">
      <?php
        $blog_posts = get_posts(array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        ));

        foreach ($blog_posts as $post) : setup_postdata($post);

          get_template_part('template-parts/content', 'thumbnail-blog');

        endforeach; wp_reset_postdata();
      ?>
    </div>
      
  </main>

<?php if (!has_block('tent/hero-image-header')) : get_sidebar(); endif; ?>
<?php get_footer(); ?>
