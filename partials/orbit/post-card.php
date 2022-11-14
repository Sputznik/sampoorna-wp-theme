<?php get_template_part('partials/smpn-thumbnail-bg');?>
<div class="post-desc">
	<span class="meta"><?php the_time( 'M j, Y' );?></span>
	<h4 class="title"><a href="<?php _e( get_the_permalink() );?>"><?php the_title();?></a></h4>
	<div class="excerpt"><?php the_excerpt();?></div>
</div>
