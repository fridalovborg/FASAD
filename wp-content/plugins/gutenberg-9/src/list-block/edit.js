import classnames from 'classnames';
import bulletIcon from './bullet-icon';
import ordedIcon from './orded-icon';

const { __ } = wp.i18n;
const { Component } = wp.element;
const { RichText, BlockControls } = wp.editor;
const { Toolbar, Tooltip, Button } = wp.components;

export default class Edit extends Component {
	render() {
		const {
			attributes: { message, listType, values },
			className, setAttributes,
		} = this.props;

		// eslint-disable-next-line no-shadow
		const onChangeMessage = message => {
			setAttributes( { message } );
		};
		const classes = classnames(
			className,
			'list',
			{ 'bullet-list': listType === 0 },
			{ 'orded-list': listType === 1 },
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

				<RichText
					tagName={ values }
					multiline="li"
					placeholder={ __( 'Lorem ipsum dolor sit amet...', 'fasad' ) }
					onChange={ onChangeMessage }
					value={ message }
					allowedFormats={ [ 'core/bold', 'core/italic', 'core/link' ] }
				/>
			</div>
		);
	}
}
