module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        utama : '#FAF096',
        second : '#D7CB6D'
      },
      fontFamily:{
        Kanit: ["Kanit-Regular"]
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}