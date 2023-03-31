<section id="faq" class="section-faqs section-container" data-matching-link="#faq-link">

	<h3 class="section-faqs__headline">Benutzung Gebäude allgemein</h3>
	<div class="section-faqs__container">
		<div class="section-faqs__accordion accordion">
			<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'faq',
					'faq-category' => 'benutzung-gebaeude-allgemein'
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="section-faqs__accordion-item accordion-item">
						<button id="" aria-expanded="false"><span class="section-faqs__accordion-title accordion-title"><?php the_title();?></span><span class="icon" aria-hidden="true"></span></button>
						<div class="section-faqs__accordion-content accordion-content">
							<p><?php the_content();?></p>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>


	<h3 class="section-faqs__headline">Innen</h3>
	<div class="section-faqs__container">
		<div class="section-faqs__accordion accordion">
			<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'faq',
					'faq-category' => 'innen'
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="section-faqs__accordion-item accordion-item">
						<button id="" aria-expanded="false"><span class="section-faqs__accordion-title accordion-title"><?php the_title();?></span><span class="icon" aria-hidden="true"></span></button>
						<div class="section-faqs__accordion-content accordion-content">
							<p><?php the_content();?></p>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>

		<h3 class="section-faqs__headline">Außen</h3>
		<div class="section-faqs__container">
			<div class="section-faqs__accordion accordion">
				<?php
					$args = array(
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'post_type' => 'faq',
						'faq-category' => 'aussen'
					);
					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="section-faqs__accordion-item accordion-item">
							<button id="" aria-expanded="false"><span class="section-faqs__accordion-title accordion-title"><?php the_title();?></span><span class="icon" aria-hidden="true"></span></button>
							<div class="section-faqs__accordion-content accordion-content">
								<p><?php the_content();?></p>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>

			<h3 class="section-faqs__headline">Fassade</h3>
			<div class="section-faqs__container">
				<div class="section-faqs__accordion accordion">
					<?php
						$args = array(
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'post_type' => 'faq',
							'faq-category' => 'fassade'
						);
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="section-faqs__accordion-item accordion-item">
								<button id="" aria-expanded="false"><span class="section-faqs__accordion-title accordion-title"><?php the_title();?></span><span class="icon" aria-hidden="true"></span></button>
								<div class="section-faqs__accordion-content accordion-content">
									<p><?php the_content();?></p>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>


				<h3 class="section-faqs__headline">Dach</h3>
				<div class="section-faqs__container">
					<div class="section-faqs__accordion accordion">
						<?php
							$args = array(
								'post_status' => 'publish',
								'posts_per_page' => -1,
								'post_type' => 'faq',
								'faq-category' => 'dach'
							);
							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="section-faqs__accordion-item accordion-item">
									<button id="" aria-expanded="false"><span class="section-faqs__accordion-title accordion-title"><?php the_title();?></span><span class="icon" aria-hidden="true"></span></button>
									<div class="section-faqs__accordion-content accordion-content">
										<p><?php the_content();?></p>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
							?>
						</div>
					</div>

	</div>

</section>