module.exports = {
content: ['./application/views/**/*.php', "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [ 
  require('@tailwindcss/typography'),
  require('@tailwindcss/forms'),
  require('@tailwindcss/line-clamp'),
  require('@tailwindcss/aspect-ratio'),
  require('flowbite/plugin')],
}
