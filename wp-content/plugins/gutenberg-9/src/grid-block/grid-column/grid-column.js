/**
 * Grid Column block Gutenberg
 *
 * This block returns each grid column.
 */

const { registerBlockType } = wp.blocks;
const { InnerBlocks } = wp.blockEditor;
const { __ } = wp.i18n;

/**
 * Register Gutenberg block
 */
registerBlockType(
    'fasad/grid-column', {
        title: __( 'Column', 'fasad' ),
        parent: ['fasad/grid-block'],
        category: 'common',
        icon: {
            src: 'grid-view'
        },

        edit: () => {
            const ALLOWED_BLOCKS = [ 'fasad/heading-block', 'fasad/text-block', 'fasad/list-block', 'fasad/image-block' ];

            return (
                <div className='edit-grid-column'>
                    <InnerBlocks
                        allowedBlocks={ ALLOWED_BLOCKS }
                        templateLock={ false }
                    />
                </div>        
            );
                
        },
        save: () => {
			return (
				<div className='grid-block__column'>
					<InnerBlocks.Content />
				</div>
			);
        },
    } 
);
