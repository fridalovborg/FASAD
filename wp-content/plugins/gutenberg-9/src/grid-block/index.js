/**
 * Grid block Gutenberg
 *
 * This block returns a 2 column grid.
 */

import './editor.scss';
import './style.scss';

const { __ } = wp.i18n; 
const { registerBlockType } = wp.blocks;
const { InnerBlocks } = wp.editor;

/**
 * Register Gutenberg block
 */
registerBlockType( 'fasad/grid-block', {
	title: __( 'Grid 2', 'fasad' ),
	icon: 'grid-view', // https://developer.wordpress.org/resource/dashicons/.
	category: 'common',

	edit: props => {
		const { setAttributes } = props;

        return (
            <div>
                <InnerBlocks
                    template={ [
                        [ 'fasad/grid-block' ],
                        [ 'fasad/grid-block' ]
                    ]}
                    templateLock={ 'all' }
                />
            </div>
        );
	},
	save() {
		return (
			<div>
				<InnerBlocks.Content />
			</div>
		);
	}
} );
