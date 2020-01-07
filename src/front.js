import domReady from '@wordpress/dom-ready';
import hljs from 'highlight.js/lib/highlight';
import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
import handlebars from 'highlight.js/lib/languages/handlebars';
import css from 'highlight.js/lib/languages/css';
import scss from 'highlight.js/lib/languages/scss';

hljs.registerLanguage( 'javascript', javascript );
hljs.registerLanguage( 'php', php );
hljs.registerLanguage( 'handlebars', handlebars );
hljs.registerLanguage( 'css', css );
hljs.registerLanguage( 'scss', scss );

/**
 * @typedef {object} wp.codeEditor~CodeEditorInstance
 * @property {object} settings - The code editor settings.
 * @property {CodeMirror} codemirror - The CodeMirror instance.
 */

const { wp } = window;

/**
 * wp.codeEditor
 *
 * @type {CodeEditorInstance}
 */
const { codeEditor } = wp;

/**
 * wp.codeMirror
 *
 * @type {CodeMirror}
 */
const { CodeMirror } = wp;

// domReady( function () {
// 	document.querySelectorAll( '.wp-block-block-demo-with-markup' ).forEach( ( block ) => {
// 		const code = block.querySelector( 'pre code' );
// 		CodeMirror( block, {
// 			value: code.innerHTML,
// 			mode: 'htmlmixed',
// 		} );
// 	} );
// } );
//
