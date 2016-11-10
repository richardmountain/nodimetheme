<?php get_header(); ?>

<div id="main">

	<div id="content" class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="row page-post">

				<div class="col-md-7  col-md-offset-3  ">

					<header>

						<div class="row">

							<div class="text-center">

								<h1 class="post-title"><?php the_title(); ?></h1>

							</div>

						</div>

						<div class="row">

							<ul class="metadata clearfix">
								<li class="meta_date"><?php the_time('F j, Y'); ?></li>
								<li class="meta_author">By <a href="<?php print get_author_posts_url(get_the_author_meta('id')); ?>"><?php print get_the_author_meta( 'display_name' ); ?></a></li>
							</ul>

						</div>

					</header>

					<div class="row">
						
						<?php the_content(); ?>

					</div>

					<div class="row">

						<?php comments_template(); ?>

					</div>

				</div>

			</article>

			<?php endwhile; else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

	</div>
	
</div>

<?php get_footer(); ?>