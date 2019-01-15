let mix = require('laravel-mix');

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


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/service-worker.js', 'public')
    .js('resources/assets/js/home.js', 'public/js')
    .js('resources/assets/js/player-profile.js', 'public/js')
    .js('resources/assets/js/main.js', 'public/js')

    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/home.scss', 'public/css')
    .sass('resources/assets/sass/main.scss', 'public/css')
    .sass('resources/assets/sass/tester.scss', 'public/css')
    .sass('resources/assets/sass/player-profile.scss', 'public/css')
    .sass('resources/assets/sass/gameweeks.scss', 'public/css')
    .sass('resources/assets/sass/news.scss', 'public/css')
    .sass('resources/assets/sass/awards.scss', 'public/css')
    .sass('resources/assets/sass/stats.scss', 'public/css')
    .sass('resources/assets/sass/match-highlights.scss', 'public/css');

mix.options({
    postCss: [
       require('autoprefixer')({
           grid: true
       })
    ]
});

if (mix.inProduction()) {
    mix.version();
} else {
    // mix.browserSync();
}
