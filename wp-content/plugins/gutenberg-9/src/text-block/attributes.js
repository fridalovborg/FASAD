const attributes = {
    message: {
        type: 'array',
        source: 'children',
        selector: '.text-block'
    },
    color: {
        type: 'string',
        default: '#107664',
    }
};

export default attributes;