<?php
/**
 * WP YAML - Clean and responsive Wordpress starter theme
 *
 * Single Post Template
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
get_header(); ?>			
				<div class="ym-grid ym-equalize linearize-level-1"> <!-- open main grid with equal heights around content and sidebar -->
					<div id="main" class="ym-g75 ym-gl main" role="main">  <!-- open content container -->
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<header>
									<h2 itemprop="headline"><?php the_title(); ?></h2>
										<p><?php
											printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span> &amp; filed under %4$s.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), wpyaml_get_the_author_posts_link(), get_the_category_list(', '));
										?></p>
								</header> 
								<section itemprop="articleBody">
									<?php the_content(); ?>
								</section> 
								<footer>
									<?php the_tags(); ?>
								</footer>
								<?php comments_template(); ?>
							</article> 
						<?php endwhile; ?>
						<?php else : ?>
							<article id="post-not-found">
								<header>
									<h1><?php _e("Oops, Post Not Found!", "wpyaml"); ?></h1>
								</header>
								<section>
									<p><?php _e("Uh Oh. Something is missing. Try double checking things, or use the navigation.", "wpyaml"); ?></p>
								</section>
							</article>
						<?php endif; ?>
					</div>
					<?php get_sidebar(); ?>
				</div> 
<?php get_footer(); ?>