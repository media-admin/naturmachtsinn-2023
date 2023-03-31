<!DOCTYPE html>
<html class="outer-html" lang='de'>
	<head>

		<!-- === META DATA === -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="content-type" content="text/html; charset=macintosh" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scaleable=no">

		<!-- Site Title -->
		<?php if (is_front_page() ) : ?>
			<title>Startseite | <?php bloginfo( 'name' ); ?></title>
		<?php else : ?>
			<title><?php wp_title($sep = ''); ?> | <?php bloginfo( 'name' ); ?></title>
		<?php endif; ?>

		<!-- === FAVICONS === -->

		<!-- Default -->
		<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon.svg" type="image/x-icon">
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon.ico" type="image/x-icon">

		<!-- PNG icons with different sizes -->
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16">

		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/vassets/images/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-180x180.png">
		<link rel="apple-touch-icon" sizes="192x192" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-192x192.png">

		<!-- Apple macOS Safari Mask Icon -->
		<link rel="mask-icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon.svg" color="#6F7070">

		<!-- Apple iOS Safari Theme -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#6F7070">
		<meta name="apple-mobile-web-app-title" content="Hofer-Holz-Bau Ges.m.b.H. - Wir machen Holz zum Thema">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Microsoft Windows Tiles -->
		<meta name="theme-color" content="#8DC21C">
		<meta name="msapplication-navbutton-color" content="#6F7070">
		<meta name="msapplication-TileColor" content="#F5FBEF">
		<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/windows-tile-icon-144x144.png">
		<meta name="application-name" content="Hofer-Holz-Bau Ges.m.b.H. - Wir machen Holz zum Thema">

		<!-- Internet Explorer 11 Tiles -->
		<meta name="msapplication-square70x70logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-70x70.png">
		<meta name="msapplication-square150x150logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-150x150.png">
		<meta name="msapplication-wide310x150logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-310x150.png">
		<meta name="msapplication-square310x310logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-310x310.png">

		<!-- Open Graph -->
		<meta property="og:title" content="Hofer-Holz-Bau Ges.m.b.H. - Wir machen Holz zum Thema">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.hoferholzbau.at">
		<meta property="og:image" content="og_image_url">
		<meta property="og:site_name" content="Hofer-Holz-Bau Ges.m.b.H. - Wir machen Holz zum Thema">
		<meta property="og:locale" content="de_AT">

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class('site-body'); ?>>

		<?php if (is_front_page() ) {
			$args = array(
				'post_status' => 'publish',
				'posts_per_page' => 1,
				'post_type' => 'notification',
			);
			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="notification">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
					<div class="notification__body inner-wrapper">
						<h2 class="notification__title">Aktueller Hinweis</h2>
						<div class="notification__content">
							<?php the_content();?>
						</div>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata();
			}
		?>

		<header class="site-header">
			<div class="site-header__branding inner-wrapper">
				<div class="site-header__logo">
					<a class="site-header-logo__link" href="<?php echo get_home_url(); ?>">
						<img class="site-header__logo-img site-header__logo-img--desktop" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Logo-Desktop-4c-positiv.svg" alt="Logo Hofer-Holz-Bau Ges.m.b.H. - Wir machen Holz zum Thema">
						<img class="site-header__logo-img site-header__logo-img--smartphone" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Logo-Smartphone-4c-positiv.svg" alt="Logo Hofer-Holz-Bau Ges.m.b.H. - Wir machen Holz zum Thema">
					</a>
					<div class="site-header__holzbaumeister">
						<img class="site-header__holzbaumeister-img" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Logo-Holzbaumeister.svg" alt="Logo Holzbaumeister">
					</div>
				</div>

				<div class="site-header__navi-contact-area">
					<div class="site-header__navi-contact-information">
						<a class="site-header__navi-contact-information-phone-container" href="tel:+43 2620 22210">
							<div class="site-header__navi-contact-information-phone">
								<img class="site-header__navi-contact-information-phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_phone.svg"/>
								<div class="site-header__navi-contact-information-phone-infos">
									<span class="site-header__navi-contact-information-phone-callout">Jetzt anrufen</span>
									<a class="site-header__navi-contact-information-phone-number" href="tel:+43 2620 22210">+43 2620 22 21-0</a>
								</div>
							</div>
						</a>
						<a class="site-header__navi-contact-information-mail-container" href="mailto:info@hoferholzbau.at">
							<div class="site-header__navi-contact-information-mail">
								<img class="site-header__navi-contact-information-mail-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_mail.svg"/>
								<div class="site-header__navi-contact-information-phone-infos">
									<span class="site-header__navi-contact-information-mail-callout">E-Mail schreiben</span>
									<a class="site-header__navi-contact-information-mail-address" href="mailto:info@hoferholzbau.at">info@hoferholzbau.at</a>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>


			<!-- Hamburger Menu Toggle -->
			<nav class="main-navigation">
				<menu class="site-menu">
					<div class="burger-menu">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
						<div class="burger-menu-caption">Menü</div>
					</div>
				</menu>

				<script>
					var navigation = document.querySelector(".main-navigation");
					var hamburger = document.querySelector(".burger-menu");

						navigation.onclick = function () {
						this.classList.toggle ("is-active");
					}

					hamburger.onclick = function () {
						this.classList.toggle ("checked");
					}
				</script>

				<!-- Main Navigation -->
					<div class="navbar inner-wrapper">
						<ul class="navbar__navigation-list">
							<?php
								$defaults = array(
									'walker'         => new Custom_Navwalker(),
									'menu'           => 'Hauptnavigation',
									'theme_location' => 'nav-menu-main',
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
					</div>
				</nav>

				<div class="site-header__navi-additional-area">
					<a class="site-header__navi-additional-area-phone-container" href="tel:+43 2620 22210">
						<div class="site-header__navi-additional-area-phone">
							<img class="site-header__navi-additional-area-phone-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_phone.svg"/>
							<div class="site-header__navi-additional-area-phone-infos">
								<span class="site-header__navi-additional-area-phone-callout">Jetzt anrufen</span>
								<a class="site-header__navi-additional-area-phone-number" href="tel:+43 2620 22210">+43 2620 22 21-0</a>
							</div>
						</div>
					</a>
					<a class="site-header__navi-additional-area-mail-container" href="mailto:info@hoferholzbau.at">
						<div class="site-header__navi-additional-area-mail">
							<img class="site-header__navi-additional-area-mail-icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/icons/icon_mail.svg"/>
							<div class="site-header__navi-additional-area-mail-infos">
								<span class="site-header__navi-additional-area-mail-callout">E-Mail schreiben</span>
								<a class="site-header__navi-additional-area-mail-address" href="mailto:info@hoferholzbau.at">info@hoferholzbau.at</a>
							</div>
						</div>
					</a>
				</div>

		</header>

		<main class="site-main wrapper">
			<div class="site-content">
			<?php if (is_front_page() ) { ?>
				<div class="section-large-hero">
					<h1 class="section-large-hero__title site-title inner-wrapper">Startseite</h1>
					<div class="section-large-hero__content">
						<p class="section-large-hero__text">
							Wir fangen dieses Gefühl für Sie ein und bauen darauf
						</p>
						<a class="section-large-hero__btn btn btn--brown card__button" role="button" href="/produkte">Ich will mehr wissen …</a>
					</div>
				</div>
				<?php } else { ?>
					<div class="section-hero">
						<h1 class="section-hero__title site-title inner-wrapper"><?php the_title();?></h1>
					</div>
			<?php } ?>