<?php
  $bg_colors = array( 'sandy-brown', 'mauvelous', 'sky-blue', 'conifer', 'perano', 'rose-bud' );
  $wrapper_classes = "smpn-grid smpn-grid-3 smpn-multicolor smpn-slick";
?>
<div class="smpn-slick-container">
  <div id="<?php _e( $atts['id'] );?>" class="<?php _e( $wrapper_classes );?>" data-target="article.post-item" data-url="<?php _e( $atts['url'] );?>" data-behaviour="smpn-post-slider">
    <?php global $post; $i = 0; while( $this->query->have_posts() ) : $this->query->the_post();?>
      <?php if( $i == count( $bg_colors ) ){ $i = 0; }?>
      <article class="smpn-sl-item post-item bg-<?php echo $bg_colors[$i];?>">
        <?php include( locate_template( 'partials/orbit/post-card.php' ) ); ?>
      </article>
    <?php $i++; endwhile;?>
  </div>
</div>
