const mix = require('laravel-mix');

require('laravel-mix-purgecss');
require('laravel-mix-versionhash');
const CompressionPlugin = require('compression-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

function isProduction() {
	return process.env.NODE_ENV == 'production';
}

// mix.setPublicPath('public');
mix.webpackConfig({
    output: {
      publicPath: '/',
      // it’s useful to have static filenames in development mode and hash-based in production
		chunkFilename: isProduction() ? 'js/[name].[md5:contenthash:hex:20].js' : 'js/[name].chunk.js'
    },
    plugins: [
        new CompressionPlugin()
    ],
    resolve: {
        modules: [
            path.resolve('./node_modules')
        ]
    }
});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
      uglify: {
          uglifyOptions: {
              compress: {
                  drop_console: true
              }
          }
      }
  })
  .purgeCss()
  .version()
  .sourceMaps();
