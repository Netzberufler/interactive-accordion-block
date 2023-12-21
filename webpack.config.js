const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

const config = {
  ...defaultConfig,
  module: {
    ...defaultConfig.module,
    rules: [
      ...defaultConfig.module.rules,
      {
        test: /\.tsx?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
    ],
  },
};

module.exports = {
  ...config,
  entry: {
    ...defaultConfig.entry(),
    'interactive-accordion-block': [ './resources/ts/interactive-accordion-block.ts', './resources/scss/interactive-accordion-block.scss' ],
  },
  output: {
    path: __dirname + '/assets',
    filename: '[name].js',
  },
};
