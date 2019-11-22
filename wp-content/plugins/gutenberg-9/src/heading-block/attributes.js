const attributes = {
    message: {
        type: 'array',
        source: 'children',
        selector: '.heading-message',
    },
    color: {
        type: 'string',
        default: '#107664',
    }
};

export default attributes;
