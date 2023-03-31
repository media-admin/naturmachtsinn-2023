<footer class="site-footer">
		<div class="site-footer__contact-area">
			<a class="site-footer__contact-phone-container" href="tel:+43 2620 22210">
				<div class="site-footer__contact-phone-infos">
					<img class="site-footer__contact-phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_phone.svg"/>
					<span class="site-footer__contact-phone-number">+43 2620 22 21-0</span>
				</div>
			</a>
			<a class="site-footer__contact-mail-container" href="mailto:info@hoferholzbau.at">
				<div class="site-footer__contact-mail-infos">
					<span class="site-footer__contact-mail-address">info@hoferholzbau.at</span>
					<img class="site-footer__contact-mail-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_mail.svg"/>
				</div>
			</a>
		</div>

		<div class="site-footer__navigation-area inner-wrapper">
			<div class="site-footer__copyright-container">
				<p class="site-footer__copyright">Copyright  <?php echo date("Y"); ?>  - Hofer-Holz-Bau Ges.m.b.H.</p>
			</div>
			<!-- Footer Navigation -->
			<div class="site-footer__navigation-container">
				<nav class="site-footer__navigation">
					<ul class="site-footer__navigation-list">
						<?php
							$defaults = array(
								'walker'         => new Footer_Walker(),
								'menu'           => 'Footermenü',
								'theme_location' => 'nav-menu-footer',
								'depth'          => 1,
								'container'      => FALSE,
								'container_class'   => '',
								'menu_class'     => '',
								'items_wrap'     => '%3$s',
								'fallback_cb'		=>	'NavWalker::fallback'
							);
							wp_nav_menu( $defaults );
						?>
					</ul>
				</nav>
			</div>
		</div>

	</footer>

	<?php wp_footer();?>

	<!-- === START SCRIPTS AREA === -->

	<!-- General Scripts -->
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

	<!-- Slick Sliders -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/scripts/modules/slick.min.js"></script>


	<!-- Slick Slider Projects Carousel -->

	<script type="text/javascript">

		jQuery('.section-projects-carousel__container').slick({
			dots: true,
			infinite: true,
			speed: 300,
			autoplay: true,
			autoplaySpeed: 4000,
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: false,
						arrows: true,
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						arrows: false,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
					}
				}
			]
		});

	</script>


	<!-- Projects Overview -->
	<script type="text/javascript">

		/* ---- for-filter-menu -----------------------------------------------*/
		jQuery(document).on('click','.section-projects-overview__project-filter-list-item',function(){
			jQuery(this).addClass('section-projects-overview__project-filter-list-item--active').siblings().removeClass('section-projects-overview__project-filter-list-item--active')
		});

		/* ---- for-project/work-filter -----------------------------------------------*/
		jQuery(document).ready(function(){
			jQuery('.section-projects-overview__project-filter-list-item').click(function(){
				const value = $(this).attr('data-filter');
				if(value == 'all'){
					jQuery('.section-projects-overview__project-item').show('1000');
				}
				else {
					jQuery('.section-projects-overview__project-item').not('.'+value).hide('1000');
					jQuery('.section-projects-overview__project-item').filter('.'+value).show('1000');
				}
			})
		});

	</script>


	<!-- Button Load More -->
	<script type="text/javascript">
		jQuery(function () {
				x=3;
				jQuery('.section-projects-overview__project-container .section-projects-overview__project-item').slice(0, 3).show();
				jQuery('#loadMore').on('click', function (e) {
						e.preventDefault();
						x = x+3;
						jQuery('.section-projects-overview__project-container .section-projects-overview__project-item').slice(0, x).slideDown();
				});
		});
	</script>


	<!-- Accordion Functionality -->
	<script>
		const items = document.querySelectorAll(".accordion button");

		function toggleAccordion() {
			const itemToggle = this.getAttribute('aria-expanded');

			for (i = 0; i < items.length; i++) {
				items[i].setAttribute('aria-expanded', 'false');
			}

			if (itemToggle == 'false') {
				this.setAttribute('aria-expanded', 'true');
			}
		}

		items.forEach(item => item.addEventListener('click', toggleAccordion));
	</script>

	</body>
</html>