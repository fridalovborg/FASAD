const path = require('path');
// Including our UglifyJS
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const glob = require('glob');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
var webpack = require('webpack')

module.exports = {
    mode: 'development',
    entry: {
        app: './assets/js/app.js'
    },
    plugins: [
        // Adding our UglifyJS plugin
        new UglifyJSPlugin()
    ],
    output: {
        filename: '[name].min.js',
        path: path.resolve(__dirname, 'dist/js')
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            // Our new rules
            {
              test: /\.s?css$/,
              use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
            }
        ]
    },
  plugins: [
    new MiniCssExtractPlugin({ filename: '../css/style.css' }),
    //new CopyWebpackPlugin([{ from: 'static/', to: '../' }])
  ]
};