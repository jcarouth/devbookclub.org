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
        "devbookclub-blue": '#EDFBFF',
        "devbookclub-blue-dark": "#0C5179"
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
