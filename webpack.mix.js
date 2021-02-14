const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
  .js('source/_assets/js/main.js', 'js')
  .js('source/_assets/js/spritemap.js', '')
  .postCss('source/_assets/css/main.css', 'css', [
    require('postcss-import'),
    require('tailwindcss'),
  ])
  .options({
    processCssUrls: false,
  })
  .webpackConfig({
    plugins: [
      new SVGSpritemapPlugin('source/_assets/icons/*.svg', {
          output: {
            filename: 'icons/spritemap.svg',
            svg4everybody: false,
            svgo: false
          },
          sprite: {
            generate: {
              symbol: true,
              use: true
            }
          }
        }
      )
    ]
  })
  .version();
