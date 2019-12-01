/**
 * Image block Gutenberg
 *
 * This block returns a img with a url to the image from the Media library. 
 */

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { MediaUpload, MediaPlaceholder, BlockControls } = wp.blockEditor;
const { IconButton, Toolbar } = wp.components;

/**
 * Register block
 */
export default registerBlockType(
    'fasad/image-block', {
        title: __( 'Image', 'fasad' ),
        category: 'common',
        icon: {
            src: 'format-image',
        }, 
        attributes: {
            imgUrl: {
                type: 'string',
                source: 'attribute',
                attribute: 'src',
                selector: 'img',
            },
            imgId: {
                type: 'number',
            },
            imgAlt: {
                type: 'string',
                source: 'attribute',
                attribute: 'alt',
                selector: 'img',
            }
        },
        edit: props => {
            const { attributes: { imgId, imgUrl, imgAlt },
                className, setAttributes } = props;

            const onSelectImage = img => {
                setAttributes( {
                    imgId: img.id,
                    imgUrl: img.url,
                    imgAlt: img.alt,
                } );
            };

            return (
                <div className={ className }>

                    { ! imgUrl ? (

                    <div className={ className }>
                        <BlockControls>
                            <Toolbar>
                                <MediaUpload
                                    onSelect={ onSelectImage }
                                    type="image"
                                    value={ imgId }
                                    render={ ( { open } ) => (
                                        <IconButton
                                            onClick={ open }
                                            className="components-toolbar__control"
                                            label={__('Edit image')}
                                            icon="edit"
                                        >
                                            { __( 'Upload image', 'fasad' ) }
                                        </IconButton>
                                    ) }
                                >
                                </MediaUpload>
                            </Toolbar>
                        </BlockControls>
                        <MediaPlaceholder
                            onSelect={ onSelectImage }
                            allowedTypes={ [ 'image' ] }
                            labels={ { 
                                title: __( 'Upload image', 'fasad' ), 
                                instructions:''
                            } }
                            icon="format-image"
                        >
                        </MediaPlaceholder>
                    </div>

                    ) : (

                        <div className={ className }>
                        <BlockControls>
                            <Toolbar>
                                <MediaUpload
                                    onSelect={ onSelectImage }
                                    type="image"
                                    value={ imgId }
                                    render={ ( { open } ) => (
                                        <IconButton
                                            onClick={ open }
                                            className="components-toolbar__control"
                                            label={__('Edit image')}
                                            icon="edit"
                                        >
                                            { __( 'Upload image', 'fasad' ) }
                                        </IconButton>
                                    ) }
                                >
                                </MediaUpload>
                            </Toolbar>
                        </BlockControls>
                    
                        <div class="image-wrapper">
                            <img
                                src={ imgUrl }
                                alt={ imgAlt }
                            />
                        </div>
                    </div>
                    )}

                </div>
            );
        },
        save: props => {
            const { imgUrl, imgAlt } = props.attributes;

            return (
                <div className='image-block'>
                    <img
                        className={ 'image-block__img' }
                        src={ imgUrl }
                        alt={ imgAlt }
                    />
                </div>
            );
        },
    },
);