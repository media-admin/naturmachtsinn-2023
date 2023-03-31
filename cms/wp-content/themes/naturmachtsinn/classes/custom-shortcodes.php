<?php

function shortcode_projects_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_projects_overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_projects_overview', 'shortcode_projects_overview' );


function shortcode_projects_carousel() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_projects_carousel');
	return ob_get_clean();
}

add_shortcode( 'shortcode_projects_carousel', 'shortcode_projects_carousel' );


function shortcode_project_process() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_project_process');
	return ob_get_clean();
}

add_shortcode( 'shortcode_project_process', 'shortcode_project_process' );


function shortcode_our_experience() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_our_experience');
	return ob_get_clean();
}

add_shortcode( 'shortcode_our_experience', 'shortcode_our_experience' );


function shortcode_supplier_listing() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_supplier_listing');
	return ob_get_clean();
}

add_shortcode( 'shortcode_supplier_listing', 'shortcode_supplier_listing' );


function shortcode_partner_listing() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner_listing');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_listing', 'shortcode_partner_listing' );


function shortcode_partners() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partners');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partners', 'shortcode_partners' );


function shortcode_faqs() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_faqs');
	return ob_get_clean();
}

add_shortcode( 'shortcode_faqs', 'shortcode_faqs' );


function shortcode_team() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_team');
	return ob_get_clean();
}

add_shortcode( 'shortcode_team', 'shortcode_team' );


function shortcode_contact() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_contact');
	return ob_get_clean();
}

add_shortcode( 'shortcode_contact', 'shortcode_contact' );


function shortcode_general_notes() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_general_notes');
	return ob_get_clean();
}

add_shortcode( 'shortcode_general_notes', 'shortcode_general_notes' );


function shortcode_product_categories() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_product_categories');
	return ob_get_clean();
}

add_shortcode( 'shortcode_product_categories', 'shortcode_product_categories' );


function shortcode_shoutout_fullwidth() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_shoutout_fullwidth');
	return ob_get_clean();
}

add_shortcode( 'shortcode_shoutout_fullwidth', 'shortcode_shoutout_fullwidth' );


function shortcode_shoutout_boxed() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_shoutout_boxed');
	return ob_get_clean();
}

add_shortcode( 'shortcode_shoutout_boxed', 'shortcode_shoutout_boxed' );








function show_tags()
{
	$post_tags = get_the_tags();
	$separator = ' | ';
	if (!empty($post_tags)) {
		foreach ($post_tags as $tag) {
			$output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
		}
		return trim($output, $separator);
	}
}



// ???????????????????????????????????????????????????????????????????????????????????????????????????????????

function all_posts_shortcode() {

	// Parameter für Posts
	$args = array(
		'category' => '',
		'numberposts' => 6,
		'post_status' => 'publish',
		'orderby'   => 'id',
		'order' => 'ASC',
	);

	// Posts holen
	$posts = get_posts($args);

	// Inhalte sammeln
	$content = '';
	foreach ($posts as $post) {

		$content .= '<div class="card column is-one-third">';
		$content .= '<div class="card-image">';
		$content .= '<a class="" href="'.get_permalink($post->ID).'">';
		$content .= '<figure class="image">';
		$content .= '<img  alt="Beitragsbild" src="'.get_the_post_thumbnail_url($post->ID, 'full').'"';
		$content .= '</figure>';
		$content .= '</a>';
		$content .= '</div>';
		$content .= '<div class="card-content">';
		$content .= '<div class="media">';
		$content .= '<div class="media-content">';
		$content .= '<p class="author is-6">Veröffentlicht am <span class="meta__date-published"><time datetime="d.m.Y">'.get_post_time('d.m.Y', $post->ID ).'</time></span></p>';
		$content .= '<a class="" href="'.get_permalink($post->ID).'"><p class="title is-4">'.$post->post_title.'</p></a>';
		$content .= '<p class="author is-6">Verfasser <span class="meta__author">'.get_the_author($post->ID).'</span></p>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '<div class="content">';
		$content .= '<small class="tags">';
		$content .= '<div class="tags">';
		$content .= '<code class="tag is-danger">';
		$content .= '<i class="fas fa-tags"></i>';
		$content .= '</code>';

		$post_tags = get_the_tags($post->ID);


		if (!empty($post_tags)) {
			foreach ($post_tags as $tag) {
				$content .= '<span class="tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
			}
		}

		$content .= '</div>';
		$content .= '</small>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';

	}

	// Inhalte übergeben
	return $content;

}

add_shortcode( 'all_posts', 'all_posts_shortcode' );

?>