/**
 * Heading block Gutenberg
 *
 * This block returns a h2 with content.
 */

/**
 * Block dependencies
 */
import classnames from 'classnames';
import attributes from './attributes';
import Edit from './edit';
import './editor.scss';
import './style.scss';

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

/**
 * Register block
 */
export default registerBlockType(
	'fasad/heading-block',{
		title: __( 'Heading', 'fasad' ),
		category: 'common',
		icon: {
			src: 'heading',
		},
		attributes,
		edit: props => {
			const { setAttributes } = props;

			return [
				<Edit key={ setAttributes } { ...{ setAttributes, ...props } } />,
			];
		},
		save: props => {
			const { attributes: { message, color } } = props;

			return (
				<div>
					<h2 className='heading-block'
						style={ { color: color } }
					>
						{ message }
					</h2>
				</div>
			);
		},
	},
);
