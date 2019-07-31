<p><?php _e(' Pick a theme from your theme directories.', 'wp_theme_mentor_envato' ); ?></p>

<div id="theme_mentor_admin_wrapper">
	<form id="wp_theme_mentor_envato_form" action="" method="POST">
		<p>
			<label for="dx_theme"><?php _e( 'Themes:', 'wp_theme_mentor_envato' ); ?></label>
			<select id="dx_theme" name="dx_theme">
				<?php foreach( $themes as $theme => $details ) {  ?>
					<option value="<?php echo $theme; ?>" <?php selected( $details['Stylesheet'], $selected ); ?>><?php echo $details->get('Name'); ?></option>
				<?php } ?>
			</select>
		</p>
		<p>
			Extra options (if any, like complex enabled)
		</p>
		<?php
		submit_button( __( 'Yoo! Ghechang..!', 'wp_theme_mentor_envato' ) );
		?>
	</form> <!-- end of #wp_theme_mentor_envato -->
</div>
