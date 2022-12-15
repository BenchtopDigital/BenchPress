const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const baseConfig = {
  module: {
    rules: [
      {
        test: /\.(ts|js)x?$/i,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        },
      },
	    {
        test: /\.s[ac]ss$/i,
        exclude: path.resolve(__dirname, 'style.css'),
        use: [
          MiniCssExtractPlugin.loader, {
            loader: 'css-loader',
            options: {
              url: false,
            }
          },
          'postcss-loader',
          'sass-loader'
        ],
      },
    ],
  },
  resolve: {
    extensions: ['.tsx', '.ts', '.js', '.jsx'],
  },
};

module.exports = {
  ...baseConfig,
  entry: {
    'benchpress': './src/js/theme/index.ts',
    // blocks: './src/js/blocks/index.ts',
    editor: './src/js/editor/index.ts',
  },
  output: {
    filename: './dist/js/[name].min.js',
    path: path.resolve(__dirname),
  },
  plugins: [
	  new MiniCssExtractPlugin({
      filename: "./dist/css/[name].min.css",
      chunkFilename: "./dist/css/[id].min.css",
  	})
  ],
  output: {
    filename: './dist/js/[name].min.js',
    path: path.resolve(__dirname),
  },
  externals: {
    '@wordpress/blocks': 'wp.blocks',
    '@wordpress/block-editor': 'wp.blockEditor',
    '@wordpress/components': 'wp.components'
  },
};