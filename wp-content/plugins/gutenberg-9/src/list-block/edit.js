import classnames from 'classnames';
import bulletIcon from './bullet-icon';
import ordedIcon from './orded-icon';

const { __ } = wp.i18n;
const { Component } = wp.element;
const { RichText, BlockControls, InspectorControls } = wp.editor;
const { Toolbar, Tooltip, Button, ColorPalette, PanelBody, ToggleControl } = wp.components;

export default class Edit extends Component {
	render() {
		const {
			attributes: { 
				message, 
				listType, 
				values, 
				color,
				fontSize
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

		const classes = classnames(
			className,
			'list',
			{ 'bullet-list': listType === 0 },
			{ 'orded-list': listType === 1 },
			{ 'large-font-size': fontSize === true }
		);

		return (
			<div className={ classnames(
				classes,
				'list-block'
			) }>
				<BlockControls key="custom-controls">
					<Toolbar>
						<Tooltip text={ __( 'Bullet list', 'fasad' ) }>
							<Button
								className={ classnames(
									{ 'is-active': listType === 0 },
									'components-icon-button',
									'components-toolbar__control',
								) }
								onClick={ () => setAttributes( { listType: 0, values: 'ul' } ) }
							>
								{ bulletIcon }
							</Button>
						</Tooltip>
					</Toolbar>
					<Toolbar>
						<Tooltip text={ __( 'Ordered list', 'fasad' ) }>
							<Button
								className={ classnames(
									{ 'is-active': listType === 1 },
									'components-icon-button',
									'components-toolbar__control',
								) }
								onClick={ () => setAttributes( { listType: 1, values: 'ol' } ) }
							>
								{ ordedIcon }
							</Button>
						</Tooltip>
					</Toolbar>
				</BlockControls>

				<InspectorControls>
					<PanelBody title={ __( 'Colors' ) }>
						<ColorPalette
							colors={ colors }
							value={ color }
							onChange={ color => setAttributes( { color } ) }
						/>
					</PanelBody>
					<ToggleControl
						label="Font size"
						help={ fontSize ? 'Large font size' : 'Small font size' }
						checked={ fontSize }
						onChange={ fontSize => setAttributes( { fontSize } ) }
					/>
				</InspectorControls>

				<RichText
					tagName={ values }
					multiline="li"
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