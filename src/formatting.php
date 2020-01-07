<?php
namespace HAMWORKS\Block_Demo_With_Markup;

use DOMDocument;
use Highlight\HighlightResult;

/**
 * Pretty format HTML
 *
 * @param string $html
 *
 * @return string
 */
function formatHTML( string $html ) {
	$dom                     = new DOMDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput       = true;
	$dom->recover            = true;
	$dom->loadXML( $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );
	return $dom->saveXML( $dom->documentElement );
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
		}
		else {
			$highlighted = $hl->highlightAuto( $code, array( 'javascript', 'css', 'php', 'xml' ) );
		}
	} catch ( \Exception $e ) {
		$result = new \stdClass();
		$result->value = $code;
		$result->language = '';
		return $result;
	}

	return $highlighted;
}
