import domReady from '@wordpress/dom-ready';


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

const convertHTML = str => {
	return str .replace(/&lt;/g, '<') .replace(/&gt;/g, '>') .replace(/&quot;/g, '"') .replace(/&#039;/g, '\'') .replace(/&#044;/g, ',') .replace(/&amp;/g, '&');
};


domReady( function () {
	Array.from( document.querySelectorAll('.wp-block-block-demo-with-markup') ).map( (element) => {
		const code = element.querySelector('pre code').innerHTML;
		CodeMirror(element, {
			value: convertHTML(code.trim()),
			readonly:true,
		});
	})
});

