<?php

namespace HAMWORKS\Block_Demo_With_Markup;

use Highlight\HighlightResult;
use XhtmlFormatter\Formatter;

/**
 * Pretty format HTML
 *
 * @param string $html
 *
 * @return string
 */
function formatHTML( string $html ) {
	$formatter = new Formatter();

	return $formatter->format( $html );
}

/**
 * Syntax Highlight.
 *
 * @param string $code
 * @param null|string $language
 *
 * @return HighlightResult|\stdClass
 */
function syntaxHighlight( string $code, ?string $language = null ) {
	$hl = new \Highlight\Highlighter();
	$hl->enableSafeMode();
	try {
		if ( $language ) {
			$highlighted = $hl->highlight( $language, $code );
		} else {
			$highlighted = $hl->highlightAuto( $code, array( 'javascript', 'css', 'php', 'xml' ) );
		}
	} catch ( \Exception $e ) {
		$result           = new \stdClass();
		$result->value    = $code;
		$result->language = '';

		return $result;
	}

	return $highlighted;
}
