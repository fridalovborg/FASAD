import classnames from 'classnames';

const { __ } = wp.i18n;
const { Component } = wp.element;
const { RichText, InspectorControls } = wp.editor;
const { ColorPalette, PanelBody } = wp.components;

export default class Edit extends Component {
	render() {
		const {
			attributes: { 
				message, 
				color 
			},
			className,
			setAttributes,
		} = this.props;

		const onChangeMessage = message => {
			setAttributes( { message } );
		};

		const colors = [
			{ name: 'Mint', color: '#C8EDDB' },
			{ name: 'Green', color: '#107664' },
			{ name: 'Beige', color: '#BEAF9A' },
			{ name: 'Light pink', color: '#FFF9F5' },
			{ name: 'Pink', color: '#F2A7BC' },
		];

		return (
			<div className={ classnames( className, 'heading-block' ) }>
				<InspectorControls>
					<PanelBody title={ __( 'Colors' ) }>
						<ColorPalette
							colors={ colors }
							value={ color }
							onChange={ color => setAttributes( { color } ) }
						/>
					</PanelBody>
				</InspectorControls>
				
				<RichText
					tagName="h2"
					placeholder={ __( 'Lorem ipsum dolor...', 'fasad' ) }
					onChange={ onChangeMessage }
					style={ { color: color } }
					value={ message }
					allowedFormats={ [ 'core/link' ] }
				/>
			</div>
		);
	}
}
