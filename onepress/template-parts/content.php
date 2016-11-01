<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array('list-article', 'clearfix') ); ?>>

	<div class="list-article-content">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

                <?php // CUSTOM CHANGE: Display date of post and author ?>
                <div class="list-article-meta">
                        <?php echo get_the_date('F j, Y');?> | <?php the_author(); ?>
                </div>

                <?php // CUSTOM CHANGE: Changes done to display thumbnail after Blog title ?>
                <div class="list-article-thumb">
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php
                        if ( has_post_thumbnail( ) ) {
                               the_post_thumbnail('blog-thumbnail-600');
                        } else {
                                echo '<img alt="" src="'. get_template_directory_uri() . '/assets/images/placholder2.png' .'">';
                        }
                        ?>
                    </a>
                </div>
                <?php //  END OF CUSTOM CHANGE ?>

		<div class="entry-excerpt">
			<?php
				the_excerpt();
			?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepress' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->
