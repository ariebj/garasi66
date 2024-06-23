const mix = require("laravel-mix");

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
mix.browserSync({
    injectChanges: true,
    open: "external",
    host: "garasi66.com",
    proxy: "https://garasi66.com",
    https: {
        key: "./ssl/server.key",
        cert: "./ssl/server.crt",
    },
    ui: false,
});
mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
    .sass("resources/sass/app.scss", "public/css")
    .version()
    .sourceMaps();
