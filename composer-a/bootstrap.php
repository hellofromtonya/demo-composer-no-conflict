<?php
/**
 * Plugin A with Composer.
 *
 * @package     KnowTheCode\ComposerPluginA
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Plugin A
 * Plugin URI:  https://github.com/KnowTheCode/demo-composer-no-conflict
 * Description: Plugin A with Composer
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://KnowTheCode.io
 * Text Domain: composer-a
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace KnowTheCode\ComposerPluginA;

// Load Composer's Autoloader.
require __DIR__ . '/vendor/autoload.php';

add_action( 'plugins_loaded', __NAMESPACE__ . '\run_the_demo' );
/**
 * Run the demo.
 *
 * @since 1.0.0
 *
 * @return void
 */
function run_the_demo(){
	if ( is_admin() ) {
		return;
	}

	$example = new Example( array(
		'plugin'      => 'plugina',
		'description' => 'Some description',
	) );

	d( $example->getArgs() );
}
