const mix = require('laravel-mix');

require('laravel-mix-purgecss');
require('laravel-mix-versionhash');
const tailwindcss          = require('tailwindcss');
const CompressionPlugin    = require('compression-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

function isProduction() {
	return process.env.NODE_ENV == 'production';
}

mix.webpackConfig({
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
   .extract([
        'vue',
        'axios'
    ])
   .sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('./tailwind.js') ],
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
