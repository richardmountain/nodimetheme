<?php get_header(); ?>

<div id="main">

	<div id="content" class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="row post">

				<div class="col-md-7  col-md-offset-3  ">


				<div class="row">

					<div class="text-center">

						<h1><?php the_title(); ?></h1>

					</div>

				</div>

				<div class="row">

					<h4><?php the_time('F j, Y'); ?> <a href="<?php print get_post_permalink( $post->ID ); ?>#respond">Leave a Comment</a></h4>

				</div>

					<div class="row">
						
						<?php the_content(); ?>

					</div>

					<div class="row">

						<?php comments_template(); ?>

					</div>

				</div>

			</div>

			<?php endwhile; else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

	</div>
	
</div>

<?php get_footer(); ?>