

<?php while (have_posts()) : the_post(); ?>

	<?php get_template_part('content', 'single'); ?>

	<?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'experon'), 'after'  => '</div>',)); ?>

<?php endwhile; ?>