import classnames from 'classnames';

const { __ } = wp.i18n;
const { Component } = wp.element;
const { RichText } = wp.editor;

export default class Edit extends Component {
	render() {
		const {
			attributes: { message },
			className, setAttributes,
		} = this.props;

		// eslint-disable-next-line no-shadow
		const onChangeMessage = message => {
			setAttributes( { message } );
		};

		return (
			<div className={ classnames(
				className,
				'text-block'
			) }>
				<RichText
					tagName="ul"
					multiline="li"
					placeholder={ __( 'Lorem ipsum dolor sit amet...', 'fasad' ) }
					onChange={ onChangeMessage }
					className={ '' }
					value={ message }
					allowedFormats={ [ 'core/bold', 'core/italic', 'core/link' ] }
				/>
			</div>
		);
	}
}
