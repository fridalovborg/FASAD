/**
 * Block dependencies
 */
import classnames from 'classnames';
import attributes from './attributes';
import Edit from './edit';
import './editor.scss';
import './style.scss';
import bulletIcon from './bullet-icon';

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

/**
 * Register block
 */
export default registerBlockType(
	'fasad/list-block',
	{
		title: __( 'Lista', 'fasad' ),
		description: __( 'Punkt- och nummerlista', 'fasad' ),
		category: 'common',
		icon: {
			src: bulletIcon,
		},
		attributes,
		edit: props => {
			const { setAttributes } = props;

			return [
				<Edit key={ setAttributes } { ...{ setAttributes, ...props } } />,
			];
		},
		save: props => {
			const { attributes: { message, values, listType } } = props;
			const ListType = '' + values;

			return (
				<div>
					<ListType className={ classnames(
						props.className,
						'list-message',
						'list-block',
						{ 'bullet-list': listType === 0 },
						{ 'orded-list': listType === 1 },
					) }
					>
						{ message }
					</ListType>
				</div>
			);
		},
	},
);
