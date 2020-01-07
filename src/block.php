<?php

namespace HAMWORKS\Block_Demo_With_Markup;

add_action(
	'init',
	function () {
		wp_enqueue_style( 'block-demo-with-markup-front', plugins_url( 'build/front.css', PLUGIN_FILE ) );
	}
);

add_action(
	'init',
	function () {
		wp_register_style( 'block-demo-with-markup', plugins_url( 'build/index.css', PLUGIN_FILE ) );
		$script_asset = require( dirname( PLUGIN_FILE ) . '/build/index.asset.php' );
		wp_register_script(
			'block-demo-with-markup',
			plugins_url( 'build/index.js', PLUGIN_FILE ),
			$script_asset['dependencies'],
			$script_asset['version']
		);

		register_block_type( 'block-demo-with-markup/block-demo-with-markup', array(
			'editor_script'   => 'block-demo-with-markup',
			'script'          => 'block-demo-with-markup-front',
			'style'           => 'block-demo-with-markup',
			'render_callback' => __NAMESPACE__ . '\render'
		) );
		load_plugin_textdomain( 'block-demo-with-markup', false, basename( PLUGIN_FILE ) . '/languages' );
		wp_set_script_translations( 'block-demo-with-markup', 'block-demo-with-markup', basename( PLUGIN_FILE ) . '/languages' );
	}
);

/**
 * Render dynamic block.
 *
 * @param $attributes
 * @param string $content
 *
 * @return false|string
 */
function render( $attributes, string $content ) {
	$content = formatHTML( $content );
	$code = syntaxHighlight( $content, 'html' );
	ob_start();
	?>
	<div class="wp-block-block-demo-with-markup">
		<div><?php echo $content; ?></div>
		<pre><code><?php echo $code->value; ?></code></pre>
	</div>
	<?php
	return ob_get_clean();
}
