/**
 * Internal block libraries
 */
const { registerBlockType } = wp.blocks;
const { InnerBlocks } = wp.editor;
const { __ } = wp.i18n;
/**
 * Register block
 */
export default registerBlockType(
    'fasad/grid-column',
    {
        title: __( 'Grid column', 'fasad' ),
        parent: ['fasad/grid-block'],
        category: 'common',
        icon: {
            src: 'grid-view'
        },

        edit: () => {
            const ALLOWED_BLOCKS = [ 'fasad/heading-block', 'fasad/text-block' ];

            return (
                <div className={ 'grid-column' }>
                    <InnerBlocks
                        allowedBlocks={ ALLOWED_BLOCKS } 
                    />
                </div>        
            );
                
        },
        save: () => {
			return (
				<div className={ 'grid-column' }>
					<InnerBlocks.Content />
				</div>
			);
        },
    },
);
