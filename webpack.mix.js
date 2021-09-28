const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]).sass('resources/sass/app.scss', 'public/css').browserSync({
        proxy: 'http://localhost:8000',
    });


//.polyfill({
//         enabled: true,
//         useBuiltIns: "usage",
//         targets: "firefox 50, IE 11"
//     });


// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .postCss("resources/css/app.css", "public/css", [
//         require("tailwindcss"),
//     ])
//     .browserSync({
//         proxy: 'http://localhost:8000',
//     })
//     .polyfill({
//         enabled: true,
//         useBuiltIns: "usage",
//         targets: "firefox 50, IE 11"
//     });
