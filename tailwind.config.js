module.exports = {
  mode: 'jit',
  purge: [
    './public/**/*.php',
    './src/**/*.{js,jsx,ts,tsx,vue}',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    screens: {
      'small': {'max': '1023px'},
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
  
}
