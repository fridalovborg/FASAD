const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { Editable, MediaUpload } = wp.blockEditor;
const { Button } = wp.components;

export default registerBlockType(
    'fasad/image-block', {
        title: __( 'Test image block', 'fasad' ),
        category: 'common',
        icon: {
            src: 'format-image',
        }, 
        attributes: {
            imgURL: {
                type: 'string',
                source: 'attribute',
                attribute: 'src',
                selector: 'img',
            },
            imgID: {
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
            const { attributes: { imgID, imgURL, imgAlt },
                className, setAttributes } = props;
            const onSelectImage = img => {
                setAttributes( {
                    imgID: img.id,
                    imgURL: img.url,
                    imgAlt: img.alt,
                } );
            };

            return (
                <div className={ className }>

                    { ! imgID ? (

                        <MediaUpload
                            onSelect={ onSelectImage }
                            type="image"
                            value={ imgID }
                            render={ ( { open } ) => (
                                <Button
                                    className={ "button button-large" }
                                    onClick={ open }
                                >
                                    { __( 'Ladda upp bild', 'fasad' ) }
                                </Button>
                            ) }
                        >
                        </MediaUpload>

                    ) : (

                        <div class="image-wrapper">
                            <img
                                src={ imgURL }
                                alt={ imgAlt }
                            />
                        </div>
                    )}

                </div>
            );
        },
        save: props => {
            const { imgURL, imgAlt } = props.attributes;

            return (
                <div className='image-block'>
                    <img
                        className={ 'image-block__img' }
                        src={ imgURL }
                        alt={ imgAlt }
                    />
                </div>
            );
        },
    },
);