module.exports = {
  content: [
    "./resources/**/*.blade.php", 
    "./resources/**/*.js", 
    "./resources/**/*.vue",
    "./public/assets/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#009ef7',
          light: '#f1faff',
          dark: '#0095e8',
          active: '#0095e8',
        },
        success: {
          DEFAULT: '#50cd89',
          light: '#e8fff3',
          dark: '#47be7d',
          active: '#47be7d',
        },
        info: {
          DEFAULT: '#7239ea',
          light: '#f8f5ff',
          dark: '#6c35dc',
          active: '#6c35dc',
        },
        warning: {
          DEFAULT: '#ffc700',
          light: '#fff8dd',
          dark: '#f1bc00',
          active: '#f1bc00',
        },
        danger: {
          DEFAULT: '#f1416c',
          light: '#fff5f8',
          dark: '#d9214e',
          active: '#d9214e',
        }
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}