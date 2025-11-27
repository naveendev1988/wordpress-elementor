<?php
/**
 * The template for displaying all single posts
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
                    <div class="entry-meta">
                        <span class="posted-on">Published on: <?php echo get_the_date(); ?></span>
                        <span class="byline"> by <?php the_author_posts_link(); ?></span>
                        <span class="categories"> | Categories: <?php the_category(', '); ?></span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php
                        the_content(); // Display post content

                        // If post has multiple pages
                      /*   wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'mytheme' ),
                            'after'  => '</div>',
                        ) ); */
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                        // Display tags
                        the_tags( '<span class="tags">Tags: ', ', ', '</span>' );
                    ?>
                </footer>
            </article>

            <?php
            // If comments are open or there are comments, load the comment template
           

        endwhile;
    endif;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar(); // Optional
get_footer();  // Include footer.php
?>