import React from 'react';
import { renderToStaticMarkup } from 'react-dom/server'
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

const edit = ( { className } ) => (
	<div className={ className }>
		<InnerBlocks />
	</div>
);

const save = ( { className } ) => {
	return (
		<InnerBlocks.Content />
	);
};

registerBlockType( 'block-demo-with-markup/block-demo-with-markup', {
	title: 'block-demo-with-markup',
	icon: 'palmtree',
	className: false,
	customClassName: false,
	category: 'common',
	edit,
	save,
} );
