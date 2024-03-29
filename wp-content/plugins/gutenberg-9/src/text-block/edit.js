/**
 * Block dependencies
 */
import classnames from 'classnames';

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { Component } = wp.element;
const { RichText, InspectorControls } = wp.blockEditor;
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
			{ name: 'Beige', color: '#776d60' },
			{ name: 'Light pink', color: '#FFF9F5' },
			{ name: 'Pink', color: '#F2A7BC' },
		];

		return (
			<div className={ classnames(
				className,
				'text-block'
			) }>
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
					multiline="p"
					placeholder={ __( 'Lorem ipsum dolor sit amet...', 'fasad' ) }
					onChange={ onChangeMessage }
					value={ message }
					style={ { color: color } }
					allowedFormats={ [ 'core/bold', 'core/italic', 'core/link' ] }
				/>
			</div>
		);
	}
}
