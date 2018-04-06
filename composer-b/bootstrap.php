<?php
/**
 * Plugin B with Composer.
 *
 * @package     KnowTheCode\ComposerPluginB
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Plugin A
 * Plugin URI:  https://github.com/KnowTheCode/demo-composer-no-conflict
 * Description: Plugin B with Composer
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://KnowTheCode.io
 * Text Domain: composer-b
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace KnowTheCode\ComposerPluginB;

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
		'plugin'      => 'pluginb',
		'description' => 'Some description',
	) );

	d( $example->getArgs() );

	include __DIR__ . '/views/notice.html';
	die();
}
