const mix = require('laravel-mix');

mix.webpackConfig({
  resolve: {
    fallback: {
      fs: false,
      os: false,
      path: false,
    },
  },
});

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .js('my-view-pp/src/main.js', 'public/js')
  .vue();
