<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */
?>

<!--
	<session class="box-page bg bg-cor-bg depoimento">
		<div class="container">
			<div class="row">				
					
				<h2>O QUE NOSSOS CLIENTES PENSAM?</h2>

				<div id="depoimento">					
					<div class="item">
						<blockquote>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Nullam dolor nibh ultricies vehicula elit vulputate tristique egestas. Praesent commodo cursus magna, vel scelerisque.<small>Corris Ambady</small></p>
						</blockquote>
					</div>
					<div class="item">
						<blockquote>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Nullam dolor nibh ultricies vehicula elit vulputate tristique egestas. Praesent commodo cursus magna, vel scelerisque.<small>Corris Ambady</small></p>
						</blockquote>
					</div>
					<div class="item">
						<blockquote>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Nullam dolor nibh ultricies vehicula elit vulputate tristique egestas. Praesent commodo cursus magna, vel scelerisque.<small>Corris Ambady</small></p>
						</blockquote>
					</div>
				</div>
				
			</div>
		</div>
	</session>
-->

	<footer class="box-page bg bg-cor-2">
		<div class="container">
			
			<div class="row">					
				<div class="col-12">
					<h1>
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="">
							<span class="font-light">PHOTOGRAPHY - VIDEOMAKER</span>
						</a>
					</h1>
					<h3>GOSTOU DO QUE VIU? TEM ALGUMA DÚVIDA? Vamos tomar um café?</h3>
					<p class="txt-destaque sub-tit">O nosso maior desejo é poder realizar o seu sonho! Vamos bater um papo e nos conhecer melhor. <br>Queremos ajuda-lo a tornar o seu sonho em eternidade.</p>

					<ul class="social-icons">
			            <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
			            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>		            
			            <li><a href="javascript:"><i class="fa fa-vimeo"></i></a></li>
			            <li><a href="javascript:"><i class="fa fa-pinterest"></i></a></li>
			        </ul>

			        <h4>
			        	<span>Rua: Azarias leite nº 8-40 - Bauru, SP</span>
			        	<span>14-3018 2566</span>
			        	<span><a href="mailto:alexandregalhardo@outlook.com" target="_blank" title="alexandregalhardo@outlook.com">alexandregalhardo@outlook.com</a></span>
			        </h4>
				</div>
			</div>

		</div>
	</footer>

	<div class="copy">
		<div class="container">
			<div class="row">

				<div class="col-6">
					<p>© <?php echo date('Y'); ?> Alexandre Galhardo. Todos os direitos reservados.</p>
				</div>

				<div class="col-6 myweb">
					<a href="http://www.itismyweb.com.br" target="_blank" title="My Web - Consultoria e Desenvolvimento"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/myweb/logo-dark.png" alt=""></a>
					<span>Consultoria e Desenvolvimento</span>
				</div>

			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

	<!-- FANCYBOX -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mousewheel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox-media.js"></script>
	<script type="text/javascript">
		jQuery(function(){
			jQuery(".modal").fancybox({ 
				maxWidth: 1200,
				maxHeight: (jQuery(window).height())-200,
		        afterLoad: function () {
		            jQuery('html').addClass('fancybox-margin fancybox-lock');
		        }
			}); 
		})
	</script>



</body>
</html>