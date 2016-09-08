<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<session class="box-page full-portfolio">
	<div class="container">
		<a class="button mais-albuns" href="<?php echo get_home_url(); ?>/fotografias"><strong>Mais Albuns</strong></a>					
		<div id="filters" class="button-group pull-right">
			<button class="button is-checked" data-filter="*">TODOS</button>
			<?php
				$args = array(
				    'taxonomy'      => 'categoria_fotos',
				    'parent'        => 0, // get top level categories
				    'orderby'       => 'name',
				    'order'         => 'ASC',
				    'hierarchical'  => 1,
				    'pad_counts'    => 0
				);
				$categories = get_categories( $args );
				foreach ( $categories as $category ){
					echo '<button class="button" data-filter=".'. $category->category_nicename .'">'. $category->name .'</button>';
				}
			?>
		</div>
	</div>

	<div class="isotope">
		<div class="grid-sizer"></div>

       <?php
        $getGaleria = array(
            'post_type' => 'fotografias',
            'post_status' => 'any',
            'orderby'           => date,
            'order'             => 'ASC'
        );

        $galeria = new WP_Query( $getGaleria );

        while($galeria->have_posts()) : $galeria->the_post();

        	$categoria = get_the_terms( $post->ID, 'categoria_fotos' );
            $capa_medium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>

			<div class="item motion-graphics <?php echo $categoria[0]->slug; ?>">
				<figure>
					<a href="<?php echo get_permalink(); ?>" title="Visualizar Galeria">
						<div class="text-overlay">
							<div class="info">
								<span>Visualizar Galeria</span>
							</div>
						</div>
						<img src="<?php echo $capa_medium[0]; ?>" class="attachment-team size-team wp-post-image" alt="<?php the_title(); ?>">
					</a>
				</figure>
			</div>

        <?php endwhile; ?>

	</div>
</session>

<script src="https://unpkg.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope-docs.min.js"></script>
<script type="text/javascript">

	jQuery( function() {
		// init Isotope
		var $container = jQuery('.isotope').isotope({
			itemSelector: '.item',
			transitionDuration: '0.6s',
			masonry: {
				columnWidth: '.grid-sizer'
			}
		});
	
		// bind filter button click
		jQuery('.full-portfolio #filters').on( 'click', 'button', function() {
			var filterValue = jQuery( this ).attr('data-filter');
			$container.isotope({ filter: filterValue });
		});
		
		// change is-checked class on buttons
		jQuery('.full-portfolio .button-group').each( function( i, buttonGroup ) {
			var $buttonGroup = jQuery( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				jQuery( this ).addClass('is-checked');
			});
		});
	
		// layout Isotope again after all images have loaded
		$container.imagesLoaded( function() {
			$container.isotope('layout');
		});
	});

	</script>

<?php get_footer(); ?>
