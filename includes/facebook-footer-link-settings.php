<?php

// Create menu link
function ffl_options_menu_link() {
	add_options_page(
		'Facebook Footer Link Opions',
		'Facebook Footer Link',
		'manage_options',
		'ffl-options',
		'ffl_options_content'
	);
}

// Create Opions Page Content
function ffl_options_content() {
	ob_start(); ?>
        
        <div class="wrap">
            <h2><?php _e( 'Facebook Footer Links Settings', 'ffl_domain'); ?></h2>
            <p><?php _e( 'Settings for the Facebook Footer Links Plugin', 'ffl_domain'); ?></p>
            <form method="post" action="options.php">
            	<?php settings_fields( 'ffl_settings_group' ); ?>
                <table class="form-table">
                	
                </table>
            </form>
        </div>
        
    <?php
	echo ob_get_clean();
}

add_action('admin_menu', 'ffl_options_menu_link');

// Register Settings
function ffl_register_settings(){
	register_setting( 'ffl_settings_group', 'ffl_settings' );
}

add_action('admin_init', 'ffl_register_settings');

?>