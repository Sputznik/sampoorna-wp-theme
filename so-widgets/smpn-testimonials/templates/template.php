<div class="smpn-slick-container">
	<div class="smpn-slick smpn-testimonials smpn-grid-3" data-behaviour="smpn-testimonials">
		<?php foreach( $instance['testimonials'] as $testimonial ): $thumbnail = wp_get_attachment_url( $testimonial['image'] ); ?>
			<div class="smpn-sl-item testimonial">
				<div class="smpn-thumbnail-bg" <?php if( $thumbnail ){ _e('style="background-image:url('.$thumbnail.');"'); } ?>></div>
				<h4 class="name"><?php _e( $testimonial['name'] );?></h4>
				<div class="content"><?php _e( $testimonial['content'] );?></div>
			</div>
		<?php endforeach;?>
	</div>
</div>
