<div class="smpn-slick-container">
	<div class="smpn-slick smpn-fadein-slider" data-behaviour="smpn-fadein-slider">
		<?php foreach( $instance['items'] as $item ): ?>
			<div class="smpn-sl-item item">
        <?php echo $item['content']; ?>
			</div>
		<?php endforeach;?>
	</div>
</div>
