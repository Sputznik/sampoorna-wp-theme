<?php
  $layout = $instance['layout'];
	$class_prefix = ( $layout == 'vertical' ) ? 'v' : 'h';
  $item_limit = ( $layout == 'vertical' ) ? 4 : 9999;
  $layout_colors = array(
    'vertical'    => array('guava', 'mango', 'finch', 'blueberry'),
    'horizontal'  => array('coconut', 'guava', 'mango', 'finch', 'iris', 'blueberry' )
  );
?>
<div class="smpn-grad-tabs smpn-grad-tabs-<?php _e( $layout );?>">
	<?php $i = 0; foreach( $instance['tabs'] as $tab ): ?>
  <?php if( $i >= $item_limit ){ break; } // BREAK IF LIMIT > COUNTER ?>
  <?php
   // RESET THE COUNTER IF THE LAYOUT IS HORIZONTAL AND THE LOOP HAS REACHED THE LAST ITEM IN THE ARRAY
   if( $layout == 'horizontal' && ( $i == count( $layout_colors[$layout] ) )  ){ $i = 0; }
  ?>
	<div class="tab">
    <span class="tab-dec" aria-hidden="true"></span>
    <a href="<?php echo( $tab['url'] ? $tab['url'] : '#' );?>"><?php _e( $tab['title'] ); ?></a>
		<span class="tab-border tab-<?php _e( $class_prefix.'-'.$layout_colors[$layout][$i] );?>" aria-hidden="true"></span>
	</div>
	<?php $i++; endforeach;?>
</div>
