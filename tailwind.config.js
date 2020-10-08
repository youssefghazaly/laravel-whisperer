module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
                'pagee': "url('/images/Untitled.png')",
                 
                })
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
