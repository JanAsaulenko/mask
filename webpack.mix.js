let mix = require('laravel-mix');
const path = require('path');

mix.webpackConfig({
  devtool: 'inline-source-map',
  module: {
    rules: [
      {
        test: /\.modernizrrc.js$/,
        use: [ 'modernizr-loader' ]
      },
      {
        test: /\.modernizrrc(\.json)?$/,
        use: [ 'modernizr-loader', 'json-loader' ]
      }
    ]
  },
  resolve: {
    alias: {
      modernizr$: path.resolve(__dirname, "./.modernizrrc"),
    }
  },
});

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
  .sourceMaps()
  .browserSync({
    proxy: process.env.APP_URL,
    files: [
      'public/css/*.css',
      'public/js/*.js'
    ]
  });

mix.disableNotifications();