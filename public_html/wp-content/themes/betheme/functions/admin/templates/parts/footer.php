<?php
	defined( 'ABSPATH' ) || exit;
  $is_custom_footer = apply_filters('betheme_dashboard_footer', 'filter_me') !== 'filter_me';
?>

<?php if( ! WHITE_LABEL ): ?>

	<?php
		if( $is_custom_footer ):
		  echo apply_filters('betheme_dashboard_footer', '');
		else:
	?>

	<div class="mfn-dashboard-footer">
	  <p class="copy">© by <a href="https://muffingroup.com/" target="_blank">Muffin Group</a></p>
	  <ul class="footer-menu">
	    <li><a target="_blank" href="https://support.muffingroup.com/">Support Center</a></li>
	    <li><a target="_blank" href="https://support.muffingroup.com/documentation/">Documentation</a></li>
	    <li><a target="_blank" href="https://support.muffingroup.com/faq/">FAQ</a></li>
	    <li><a target="_blank" href="https://support.muffingroup.com/video-tutorials/">Video Tutorials</a></li>
	  </ul>
	  <ul class="social-menu">
	    <li><a target="_blank" href="https://www.facebook.com/MuffinGroup/"><i class="icon-facebook"></i></a></li>
	    <li><a target="_blank" href="https://www.youtube.com/user/MuffinGroup"><i class="icon-youtube"></i></a></li>
	  </ul>
	</div>

	<?php endif; ?>

<?php endif; ?>
