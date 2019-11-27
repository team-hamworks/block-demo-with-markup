<?php
/**
 * Plugin Name:     block-demo-with-markup
 * Plugin URI:      https://gitlab.com/hamworks/wordpress-plugins/block-demo-with-markup.git
 * Description:     block-demo-with-markup.
 * Author:          hamworks
 * Author URI:      https://ham.works
 * Text Domain:     block-demo-with-markup
 * Domain Path:     /languages
 * Version:         0.0.1
 * @package         Block_Demo_With_Markup
 */

namespace HAMWORKS\Block_Demo_With_Markup;

const PLUGIN_FILE = __FILE__;

/**
 * Get plugin information.
 *
 * @return array {
 *     Array of plugin information for the strings.
 *
 * @type string $Name Plugin mame.
 * @type string $PluginURI Plugin URL.
 * @type string $Version Version.
 * @type string $Description Description.
 * @type string $Author Author name.
 * @type string $AuthorURI Author URL.
 * @type string $TextDomain textdomain.
 * @type string $DomainPath mo file dir.
 * @type string $Network Multisite.
 * }
 */
function get_plugin_data() {
	static $data = null;
	if ( empty( $data ) ) {
		$data = \get_file_data(
			__FILE__,
			[
				'Name'        => 'Plugin Name',
				'PluginURI'   => 'Plugin URI',
				'Version'     => 'Version',
				'Description' => 'Description',
				'Author'      => 'Author',
				'AuthorURI'   => 'Author URI',
				'TextDomain'  => 'Text Domain',
				'DomainPath'  => 'Domain Path',
				'Network'     => 'Network',
			]
		);
	}

	return $data;
}


/**
 * Block Initializer.
 */
require_once dirname( __FILE__ ) . '/src/init.php';
