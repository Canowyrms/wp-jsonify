<?php
/**
 * @wordpress-plugin
 * Plugin Name: WP JSONIFY
 * Plugin URI:  http://TODO.dev/
 * Description: TODO
 * Version:     0.0.0
 * Author:      TODO
 * Author URI:  TODO
 * License:     TODO
 * License URI: TODO
 */

declare(strict_types=1);

namespace BK\JSONIFY;

use BK\JSONIFY\Hooks\{
	Activator,
	Deactivator,
	Uninstaller
};
use BK\JSONIFY\Utilities\JSONIFY;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Plugin constants
 */
//define('JSONIFY_CONST', '');

/**
 * Plugin hooks
 */
//@fmt:off
//register_activation_hook(  __FILE__, fn () => Activator::init());   // TODO - Plugin activator
//register_deactivation_hook(__FILE__, fn () => Deactivator::init()); // TODO - Plugin deactivator
//register_uninstall_hook(   __FILE__, fn () => Uninstaller::init()); // TODO - Plugin uninstaller
//@fmt:on

/**
 * Boot up
 */
JSONIFY::init();

/**
 * Testing
 */

/*JSONIFY::jsonify('my-tax', [
	'slug'      => 'my-tax',
	'postTypes' => ['my-post'],
	'labels'    => ['My Tax', 'My Taxes'],
	'extra'     => [], // TODO?
]);*/

/*JSONIFY::jsonify('my-cpt', [
	'slug'   => 'my-post',
	'labels' => ['My Post', 'My Posts'],
	'icon'   => '', // TODO
	'extra'  => [], // TODO?
]);*/
