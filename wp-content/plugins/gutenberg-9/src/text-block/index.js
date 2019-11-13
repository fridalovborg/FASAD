/**
 * Block dependencies
 */
import classnames from 'classnames';
import attributes from './attributes';
import Edit from './edit';
import './editor.scss';
import './style.scss';
import icon from './icon';

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

/**
 * Register block
 */
export default registerBlockType(
	'fasad/text-block',
	{
		title: __( 'Text', 'fasad' ),
		description: __( 'Brödtext', 'fasad' ),
		category: 'common',
		icon: {
			src: icon,
		},
		attributes,
		edit: props => {
			const { setAttributes } = props;

			return [
				<Edit key={ setAttributes } { ...{ setAttributes, ...props } } />,
			];
		},
		save: props => {
			const { attributes: { message } } = props;

			return (
				<div>
					<div className={ classnames(
						props.className,
						'message',
						'text-block'
					) }
					>
						{ message }
					</div>
				</div>
			);
		},
	},
);
