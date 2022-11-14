<?php
  $bg_colors = array( 'sandy-brown', 'conifer', 'mauvelous', 'sky-blue', 'perano', 'rose-bud', 'sea-buckthorn' );
?>
<div class="smpn-slick-container">
	<div class="smpn-slick smpn-user-slider" data-behaviour="smpn-user-slider">
		<?php $i = 0; foreach( $instance['users'] as $user ): $thumbnail = wp_get_attachment_url( $user['image'] ); ?>
			<?php if( $i == count( $bg_colors ) ){ $i = 0; }?>
			<div class="smpn-sl-item user-item bg-<?php echo $bg_colors[$i];?>">
				<div class="smpn-thumbnail-bg" <?php if( $thumbnail ){ _e('style="background-image:url('.$thumbnail.');"'); } ?>></div>
				<div class="meta">
					<h4 class="title"><?php _e( $user['name'] );?></h4>
					<div class="bio"><?php _e( $user['bio'] );?></div>
				</div>
			</div>
		<?php $i++; endforeach;?>
	</div>
</div>
