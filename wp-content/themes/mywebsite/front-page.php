<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */

get_header(); ?>

<!--
<session class="box-page bemvindo">
	<div class="container">
		<div class="row">
			
			<div class="col-4">
				<h3>BEM VINDO!</h3>
				<span>muito obrigado por nos visitar</span>
				<ul class="social-icons">
		            <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
		            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>		            
		            <li><a href="javascript:"><i class="fa fa-vimeo"></i></a></li>
		            <li><a href="javascript:"><i class="fa fa-pinterest"></i></a></li>
		        </ul>
				
				<img class="livro-nupcial" src="<?php echo get_template_directory_uri(); ?>/assets/images/livro-nupcial.png" alt="">
			</div>

			<div class="col-8">
				<iframe src="https://player.vimeo.com/video/129098941" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>

		</div>
	</div>
</session>
-->



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


<session class="box-page bg bg-cor-bg">
	<div class="container">
		<h2>Quer eternizar o seu momento especial?</h2>
		<p class="txt-destaque sub-tit">Nós podemos fazer isso por você</p>
		<a href="<?php echo get_home_url(); ?>/contato" class="button destaque contato" title="Saiba Mais"><strong>Fale Conosco</strong></a>
	</div>
</session>

<session class="box-page">
	<div class="container">
		<div class="row">
			<h2>ALEXANDRE GALHARDO | Photography - Videomaker</h2>
			<p class="txt-destaque sub-tit">Somos um estúdio de <strong>Fotografia e Vídeo Maker Digital</strong>, especialisado em festas e eventos em geral. Gostamos de transformar idéias em coisas bonitas! Momentos em sentimentos!</p>
			<a href="<?php echo get_home_url(); ?>/sobre" class="button destaque saiba-mais" title="Saiba Mais"><strong>Saiba Mais</strong></a>
		</div>
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
