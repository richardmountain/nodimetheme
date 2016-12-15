<?php get_header(); ?>

<div id="main">

	<div id="content" class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="row page-post">

				<div class="col-md-8  col-md-offset-2  ">

					<header>

						<div class="row">

							<div class="text-center">

								<h1 class="post-title"><?php the_title(); ?></h1>

							</div>

						</div>

						<div class="row">

							<div class="metadata clearfix  text-center">
								<div class="meta_date"><?php the_time('F j, Y'); ?></div>
								<div class="meta_author">By <a href="<?php print get_author_posts_url(get_the_author_meta('id')); ?>"><?php print get_the_author_meta( 'display_name' ); ?></a></div>
							</div>

						</div>

					</header>

					<?php if ( has_post_thumbnail() ) { ?>

						<div class="row  featured-image">

							<div class="col-xs-12">
								<?php print the_post_thumbnail( 'post-thumbnails', array( 'class'  => 'img-responsive' ) ); ?>
							</div>

						</div>

					<?php } ?>

					<div class="row  main-content">
						
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