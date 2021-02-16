const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );

module.exports = ( env, options ) => {
	return {
		mode: "production",
		
		module: {
			rules: [
				{
					enforce: 'pre',
					test: /\.(js|ts)$/,
					exclude: /node_modules/,
					loader: 'eslint-loader',
				},
				{
					test: /\.ts$/,
					use: 'ts-loader',
				},
				{
					test: /\.js$/,
					exclude: /node_modules/,
					use: {
						loader: 'babel-loader',
						options: {
							presets: [ '@babel/preset-env' ],
						},
					},
				},
				{
					test: /\.scss/,
					use: [
						{
							loader: MiniCssExtractPlugin.loader,
						},
						{
							loader: 'css-loader',
							options: {
								url: false,
								sourceMap: ( "development" === options.mode ),
								importLoaders: 2,
							},
						},
						{
							loader: 'postcss-loader',
							options: {
								sourceMap: ( "development" === options.mode ),
								plugins: [
									require( 'autoprefixer' )( { grid: true } ),
								],
							},
						},
						{
							loader: 'sass-loader',
							options: {
								sourceMap: ( "development" === options.mode ),
							},
						},
					],
				},
			],
		},
		resolve: {
			extensions: [ '.scss', '.js', '.ts' ],
			alias: {
				shared: path.join( __dirname, 'src', 'sass', 'shared' ),
				node: path.join( __dirname, 'node_modules' ),
			}
		},
		
		plugins: [
			new MiniCssExtractPlugin( {
				filename: '${__dirname}/assets/css/style.css',
			} ),
		],
		externals: {
			jquery: 'jQuery',
			normalize: 'normalize',
		},
	};
}