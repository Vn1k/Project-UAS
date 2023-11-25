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
        second : '#D7CB6D',
        third : '#D9D5B8',
        fourth: '#f45905'
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