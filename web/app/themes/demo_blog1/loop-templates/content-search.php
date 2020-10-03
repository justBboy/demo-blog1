<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	<a href="<?php the_permalink() ?>">

		<div class="card blog-card">
			<header class="entry-header">
				<h2 class="card-title"> <?php
				the_title();
				?> </h2>
				
	
				<?php if ( 'post' === get_post_type() ) : ?>
	
					<h5 class="post-meta"><?php the_date(); echo ' , '; the_author(); ?></h5>
	
				<?php endif; ?>
	
			</header><!-- .entry-header -->
			<div class="row">
				<div class="col-md-6">
					
					<img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" width="100%" height="100%">
					
				</div>
		
				<div class="col-md-6 entry-content">
				<div class="card-text">
					<?php the_excerpt(); ?>
				</div>
		
			</div><!-- .entry-content -->
			</div>
	
	
		<!-- .entry-footer -->
	
		</div>
	</a>

</article><!-- #post-## -->
