import classnames from 'classnames';

const { __ } = wp.i18n;
const { Component } = wp.element;
const { RichText } = wp.editor;

export default class Edit extends Component {

    constructor() {
        super( ...arguments );
    }

    render() {
        const {
            attributes: { message },
            className, setAttributes
        } = this.props;

        const onChangeMessage = message => { setAttributes( { message } ) };

        return (
            <div className={ classnames(
                className,
                'text-block'
            ) }>
                <RichText
                    tagName="div"
                    multiline="p"
                    placeholder={ __( 'Lorem ipsum dolor sit amet...', 'fasad' ) }
                    onChange={ onChangeMessage }
                    className={""}
                    value={ message }
                />
            </div>
        );
    }
}