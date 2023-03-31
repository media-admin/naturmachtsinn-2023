<?php

get_header(); ?>
		<?php
			global $post;
			$content = apply_filters('the_content',$post->post_content);

			echo $content;
		?>
	</div>
</main>

<?php get_footer(); ?>