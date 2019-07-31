<?php

/**
 * Class for all static validations to be covered by regex
 * @author nofearinc
 *
 */
class General_Theme_Validations {
	public $template_validations = array();
	public $include_validations = array();
	public $common_validations = array();
	
	public function __construct() {
		$this->common_validations = array(
			'/<script/' => __( 'Script tags should be included on wp_enqueue_scripts or admin_enqueue_scripts instead of embedded directly', 'wp_theme_mentor_envato' ),
			'/<link(.+)style/' => __( 'Styles should be included on wp_enqueue_scripts or admin_enqueue_scripts instead of embedded directly', 'wp_theme_mentor_envato' ),
			// '/<.id=(.*)>/' => 'id check',
			'/query_posts\(/' => __( 'Usage of query_posts is discouraged, use a WP_Query instance instead. ', 'wp_theme_mentor_envato' ),
			'/Wordpress|WORDPRESS/' => __( 'The only possible spelling of WordPress is with capital W and capital P. ', 'wp_theme_mentor_envato' ),
			'/wp_deregister_script\([\'"\s]+jquery[\'"\s]+\)/' => __('Don\'t you dare to deregister jQuery without a very solid and valid reason.', 'wp_theme_mentor_envato'),
			'/wp_dequeue_script\([\'"\s]+jquery[\'"\s]+\)/' => __('Do not dequeue jQuery without a very solid and valid reason.', 'wp_theme_mentor_envato'),
			'/global \$data/' => __('If you intend to use global variables, use a proper unique naming and prefix them properly.', 'wp_theme_mentor_envato'),
			'/echo \$/' => __('All dynamic data must be correctly escaped for the context where it is rendered.', 'wp_theme_mentor_envato'),
			'/dirname\(|\/basename\(/' => __('Directory path should be get_template_directory() and not dirname( FILE ).', 'wp_theme_mentor_envato'),
			'/wp_enqueue_script\([\'"\s]+jquery[\'"\s]+\)/' => __('There is no need to use the function wp_enqueue_script just to insert jQuery, since jQuery can be called for those scripts which need it passing the argument array(‘jquery’).', 'wp_theme_mentor_envato'),
			'/force_activation(.+)=>(.+)true|force_activation(.+)=>(.+)TRUE|force_activation(.+)=>(.+)True/' => __('Please Disable TGMPA force activation plugins', 'wp_theme_mentor_envato'),
			'/force_deactivation(.+)=>(.+)true|force_deactivation(.+)=>(.+)TRUE|force_deactivation(.+)=>(.+)True/' => __('Please Disable TGMPA force deactivation plugins', 'wp_theme_mentor_envato'),
		);
	}
}