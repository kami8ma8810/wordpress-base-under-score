<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package base_under_score
 */

get_header();
?>

	<main id="primary" class="site-main col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<h1>商品詳細</h1>
			<?php $terms = get_the_terms(get_the_ID(), 'genre'); ?>
			<?php if($terms): ?>
			<ul>
				<?php foreach ($terms as $term): ?>
					<li><a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
			<?php

			// <!-- ↓はtempret-parts/content-items（投稿名）を参照する -->
			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'base-under-score' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'base-under-score' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
