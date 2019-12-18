import React from 'react';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

const edit = ( { className } ) => {
	return (
		<div className={ className }>
			<InnerBlocks />
		</div>
	);
};

const save = ( { className } ) =>
	(
		<InnerBlocks.Content />
	);

registerBlockType( 'block-demo-with-markup/block-demo-with-markup', {
	title: 'block-demo-with-markup',
	icon: 'palmtree',
	className: false,
	customClassName: false,
	category: 'common',
	edit,
	save,
} );
