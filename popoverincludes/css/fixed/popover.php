<div id='<?php echo $popover_messagebox; ?>' data-id='<?=$popover->id?>' class='visiblebox nwp-msgbox' style='position: fixed; <?php echo $style; ?>'>
	<a href='javascript: return false;' class='closebox' title='<?=__('Close this box','popover')?>'></a>
	<div class='nwp-msg' style='<?php echo $box; ?>'>
		<div class="popover-content"><?php 
			$popover_content = do_shortcode($popover_content);
			$popover_content = wptexturize($popover_content);
			$popover_content = convert_smilies($popover_content);
			$popover_content = convert_chars($popover_content);
			$popover_content = wpautop($popover_content);
			$popover_content = shortcode_unautop($popover_content);
			$popover_content = prepend_attachment($popover_content);
			echo $popover_content;
			?>
		</div>
		<div class='clear'></div>
		<?php if($popover_hideforever != 'yes') {
			?>
			<div class='claimbutton hide'><a href='#' class='clearforever'><?php _e('Never see this message again.','popover'); ?></a></div>
			<?php
		}
		?>
	</div>
	<div class='clear'></div>
</div>