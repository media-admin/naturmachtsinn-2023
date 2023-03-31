<section class="section-team section-container">
	<!-- <h2 class="section-team__title h2__section-headline">Team</h2>

	<p class="section-team__intro intro">
		Unser Betrieb setzt sich grob aus zwei Bereichen zusammen. Neben unseren Mitarbeiter/innen im Büro, die sich um die Planung, das Projektmanagement, den Holzhandel und die Administration kümmert, haben wir natürlich die Facharbeiter im Betrieb. Diese kümmern sich um die Produktion und bzw. befinden sich auf den Baustellen (3 Partien).

		Wir sind ein Ausbildungsbetrieb und beschäftigen im Schnitt zwei bis drei Lehrlinge. Diese durchlaufen bei uns wahlweise die Ausbildung zum Zimmerer (3 Jahre) bzw. Zimmerei-Techniker (4 Jahre).
	</p> -->

	<article class="wrapper">
		<h3 class="section-team__headline">Geschäftsführung & Büro</h3>
		<div class="section-team__container">
			<ul class="section-team__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'team-member',
					'team-member-category' => 'geschaeftsfuehrung-buero'
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					<li class="section-team__listing-item">
						<img class="section-team__img lazyload" src="<?php echo $featured_img_url; ?>">
						<div class="section-team__data">
							<p class="section-team__name"><?php the_title();?></p>
							<p class="section-team__jobtitle"><?php the_field('team-member-jobtitle');?></p>
							<a class="section-team__phone" href="tel:<?php the_field('team-member-phone');?>" target="_blank"><?php the_field('team-member-phone');?></a>
							<a class="section-team__mail" href="mailto:<?php the_field('team-member-email');?>" target="_blank"><?php the_field('team-member-email');?></a>
						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</article>

	<article class="wrapper">
		<h3 class="section-team__headline">Arbeiter / Werkstatt</h3>
		<div class="section-team__container">
			<ul class="section-team__listing">
				<?php
				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'team-member',
					'team-member-category' => 'arbeiter-werkstatt'
				);
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					<li class="section-team__listing-item">
						<img class="section-team__img lazyload" src="<?php echo $featured_img_url; ?>">
						<div class="section-team__data">
							<p class="section-team__name"><?php the_title();?></p>
							<p class="section-team__jobtitle"><?php the_field('team-member-jobtitle');?></p>
							<a class="section-team__phone" href="tel:<?php the_field('team-member-phone');?>" target="_blank"><?php the_field('team-member-phone');?></a>
							<a class="section-team__mail" href="mailto:<?php the_field('team-member-email');?>" target="_blank"><?php the_field('team-member-email');?></a>
						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</article>

</section>