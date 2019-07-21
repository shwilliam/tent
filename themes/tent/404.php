<?php
/**
 * 404 template
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <section class="error-404 not-found">
      <header class="page__header">
        <h2 class="page__title">
          <?php
            echo esc_html(
              'Oops! That page can&rsquo;t be found.'
            );
          ?>
        </h2>
      </header>

      <div class="page__content">
        <p>
          <?php
            echo esc_html(
              'It looks like nothing was found at this location. Maybe try one of the links below or a search?'
            );
          ?>
        </p>

        <?php get_search_form(); ?>

        <?php the_widget(
          'WP_Widget_Recent_Posts',
          array(),
          array(
            'before_widget' => '<div class="widget reset-list reset-list--no-pad"/>',
            'before_title'  => '<h3 class="widget__title">',
            'after_title'   => '</h3>',
          )
        ); ?>

        <?php if (tent_categorized_blog()) : ?>
        <div class="widget">
          <h2 class="widget__title"><?php echo esc_html('Most Used Categories'); ?></h2>
          <ul class="reset-list reset-list--no-pad">
            <?php
              wp_list_categories(
                array(
                  'orderby'    => 'count',
                  'order'      => 'DESC',
                  'show_count' => 1,
                  'title_li'   => '',
                  'number'     => 10,
                )
              );
            ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php
          $archive_content = '<p>' . sprintf(
            esc_html(
              'Try looking in the monthly archives. %1$s'
            ),
            convert_smilies(':)')
          ) . '</p>';

          the_widget(
            'WP_Widget_Archives',
            'dropdown=1',
            "after_title=</h2>$archive_content"
          );
        ?>

      </div>
    </section>

  </main>

<?php get_footer(); ?>
