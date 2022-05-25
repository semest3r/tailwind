module.exports = {
content: ['./application/views/**/*.php'],
  theme: {
    extend: {},
  },
  plugins: [ 
  require('@tailwindcss/typography'),
  require('@tailwindcss/forms'),
  require('@tailwindcss/line-clamp'),
  require('@tailwindcss/aspect-ratio'),],
}
