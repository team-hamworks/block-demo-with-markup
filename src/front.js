import domReady from '@wordpress/dom-ready';
import beautify from 'js-beautify';
import hljs from 'highlightjs/highlight.pack'

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

domReady( function () {
	document.querySelectorAll('pre code').forEach((block) => {
		hljs.highlightBlock(block);
	});
} );

