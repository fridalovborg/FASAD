/**
 * Grid block Gutenberg
 *
 * This block returns a 2 column grid.
 */

import './editor.scss';
import './style.scss';

const { __ } = wp.i18n; 
const { registerBlockType } = wp.blocks;
const { InnerBlocks } = wp.blockEditor;

/**
 * Register Gutenberg block
 */
registerBlockType( 
	'fasad/grid-block', {
		title: __( 'Grid', 'fasad' ),
		icon: 'grid-view', // https://developer.wordpress.org/resource/dashicons/
		category: 'common',

		edit: () => {
			return (
				<div className='edit-grid-block'>
					<InnerBlocks
						template={ [
							[ 'fasad/grid-column' ],
							[ 'fasad/grid-column' ]
						]}
						templateLock='all'
					/>
				</div>
			);
		},
		save: () => {
			return (
				<div className='grid-block'>
					<InnerBlocks.Content />
				</div>
			);
		}
	} 
);
