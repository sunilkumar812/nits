const defaultPreset = require('tailwindcss/preset');
module.exports = {
    presets: [defaultPreset],
  content: [
    './*.php',
    './**/*.php',
    './assets/src/**/*.js',
    './assets/src/**/*.css',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
  corePlugins: {
    preflight: true,
  },
}