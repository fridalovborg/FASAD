const attributes = {
	message: {
		type: 'array',
		source: 'children',
		selector: '.list-block',
	},
	values: {
		type: 'string',
		default: 'ul',
	},
	listType: {
		type: 'integer',
		default: 0,
	},
	color: {
        type: 'string',
        default: '#107664',
	},
	fontSize: {
		type: 'boolean',
		deafault: false
	}
};

export default attributes;
