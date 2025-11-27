<?php
/**
 * The template for displaying all pages
 *
 * @package MyTheme
 */

get_header(); // Include header.php
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                        the_content(); // Display page content
                        
                        // If the page has multiple pages of content
                       /*  wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'mytheme' ),
                            'after'  => '</div>',
                        ) ); */
                    ?>
                </div>

            </article>

        <?php endwhile;
    endif;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
/* get_sidebar();  */// Optional: include sidebar.php if your theme has one
get_footer();  // Include footer.php
