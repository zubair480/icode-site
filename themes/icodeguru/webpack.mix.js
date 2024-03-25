let mix = require('laravel-mix');

mix.setPublicPath('dist')
   .js('src/app.js', 'js')
   .sass('src/scss/style.scss', 'css');

mix.webpackConfig({
    resolve: {
        extensions: [".*", ".wasm", ".mjs", ".js", ".jsx", ".json"]
    }
});
