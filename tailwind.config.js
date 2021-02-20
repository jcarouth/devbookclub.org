module.exports = {
  purge: {
    content: [
      'source/**/*.blade.php',
      'source/**/*.md',
      'source/**/*.html',
    ]
  },
  theme: {
    extend: {
      colors: {
        blue: {
          100: '#D3E9E3',
          200: '#AAD3CE',
          300: '#82BEBD',
          400: '#5A9EA7',
          500: '#337A90',
          600: '#0C5179',
          700: '#09326C',
          800: '#06185E',
          900: '#04044F',
          1000: '#100240',
        },
        gray: {
          50: '#EAEBEB',
          100: '#DADCDC',
          200: '#B6BCBB',
          300: '#939A9B',
          400: '#70787A',
          500: '#4D5559',
          600: '#2A3238',
          700: '#262E33',
          800: '#212A2D',
          900: '#1D2528',
          1000: '#192122',
        },
        white: '#FAFAFA'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
