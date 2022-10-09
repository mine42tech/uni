const mix = require('laravel-mix');

mix
  // Third-part js libs
  .scripts([
    'public/lib/jquery/jquery-3.3.1.min.js',
    'public/lib/swiper-4.5.0/dist/js/swiper.min.js',
    'node_modules/lax.js/lib/lax.min.js',
    'node_modules/lightbox2/dist/js/lightbox.min.js',
    'public/lib/scroll-out/dist/scroll-out.min.js',
    'public/lib/bootstrap-4.3.1/js/bootstrap.bundle.min.js',
    'public/lib/fastclick/fastclick.js',
    'public/js/site/global.js'
  ], 'public/js/site/custom.js')

  // Development js
  .js('resources/js/site.js', 'public/js/site/global.js')

  // Development sass
  .sass('resources/sass/global.scss', 'public/css/site/global.css')
  .options({
    autoprefixer: {
      options: {
        browsers: [ 'last 40 versions' ],
        grid: true
      }
    }
  })

  // Third-part css libs + development compiled css
  .styles([
    'public/lib/swiper-4.5.0/dist/css/swiper.min.css',
    'node_modules/lightbox2/dist/css/lightbox.min.css',
    'public/lib/bootstrap-4.3.1/css/bootstrap.min.css',
    'public/lib/animate-css/animate.css',
    'public/css/site/global.css'
  ], 'public/css/site/custom.css')

  .version()

  .browserSync('http://127.0.0.1:8000/');
