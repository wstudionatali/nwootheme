const tailwindcss = require('tailwindcss');


module.exports = {
  plugins: {
     tailwindcss: {},    
    'postcss-preset-env': {
      features: { 'nesting-rules': false },
    },
    'postcss-import': {}
  }
}
