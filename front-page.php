<?php get_header(); ?>

<div id="main">

	<div id="content" class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="row post">

				<div class="col-md-7  col-md-offset-3  ">

					<div class="row">

						<div class="col-md-12  metadata">

							<h4><?php the_time('F j, Y'); ?> <a href="<?php print get_post_permalink( $post->ID ); ?>#respond">Leave a Comment</a></h4>

						</div>

					</div>

					<div class="row">

						<div class="col-md-12">
							
							<h1><a href="<?php print get_post_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h1>

						</div>

					</div>

					<?php if ( has_post_thumbnail() ) { ?>

						<div class="row  featured-image">

							<div class="col-xs-12">
								<?php print the_post_thumbnail( 'post-thumbnails', array( 'class'  => 'img-responsive' ) ); ?>
							</div>

						</div>

					<?php } ?>


					<div class="row">

						<div class="col-md-12">
							
							<p><?php the_content(__('(more...)')); ?></p>
							
						</div>

					</div>		

				</div>

			</div>

			<?php endwhile; else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

	</div>
	
</div>

<?php get_footer(); ?>