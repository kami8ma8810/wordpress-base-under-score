<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package base_under_score
 */

get_header();
?>

<main id="primary" class="site-main col-md-8">
	<ul>
		<?php if (have_posts()) : ?>
		<header class="page-header">
			<h1>WEB制作ショップ</h1>
			<?php $terms = get_terms('genre'); ?>
			<ul>
				<?php foreach ($terms as $term): ?>
				<li><a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></li>
				<?php endforeach; ?>
			</ul>
			<h2>小説用の一覧のテンプレートを使っています。（taxonomy-genre-novel.php）</h2>
		</header><!-- .page-header -->

		<?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();
                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */

                // get_template_part( 'template-parts/content', get_post_type() );
                ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php
            endwhile;
            ?>
	</ul>
	<?php
        the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');
        endif;
        ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
