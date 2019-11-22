const attributes = {
    message: {
        type: 'array',
        source: 'children',
        selector: '.message'
    },
    color: {
        type: 'string',
        default: '#107664',
    }
};

export default attributes;