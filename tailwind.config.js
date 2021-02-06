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
        "devbookclub-blue": '#EDFBFF'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
