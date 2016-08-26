<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */
?>
<?php if ( is_single() ) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		<header>
			<h2><?php the_title(); ?></h2> <?php //print_r($post); ?>
			<h4>
				<?php $terms = get_the_terms( $post->ID , 'categoria_fotos' );
				foreach ( $terms as $term ) { ?>
					<span><a href="<?php echo esc_url( get_term_link( $term ) ); ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></span>
				<?php } ?>
			</h4>
			<?php the_content(); ?>
			<ul class="social-icons">
				<li>Compartilhe: </li>
	            <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>		            
	            <!--<li><a href="#"><i class="fa fa-vimeo"></i></a></li>-->
	            <li><a href="javascript:"><i class="fa fa-pinterest"></i></a></li>
	        </ul>
		</header>

		<session class="full-portfolio">
			<div class="container">

				<?php $images = get_field('fotos');
				if( $images ): ?>

					<div class="isotope">
						<div class="grid-sizer"></div>

						<?php foreach( $images as $image ): ?>

							<div class="item motion-graphics photography">
								<figure>
									<a href="<?php echo $image['url']; ?>" class="modal" rel="<?php echo $post->ID; ?>">
										<div class="text-overlay">
											<div class="info">
												<span>Ver Foto</span>
											</div>
										</div>
										<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
								</figure>
							</div>

						<?php endforeach; ?>

					</div>

				<?php endif; ?>

			</div>
		</session>

	</article>

<?php else : ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="item motion-graphics photography">
			<figure>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div class="text-overlay">
						<div class="info">
							<span>Visualizar Album</span>
						</div>
					</div>
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
		</div>
	</article>

<?php endif; ?>









<?php /*

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post *
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

*/ ?>