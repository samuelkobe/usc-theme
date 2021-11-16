module.exports = {
  purge:  [
    './**/*.php', 
    './**/*.css',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        brand: {
          bright: '#efcaca',
          main: '#a03d47',
          dark: '#6d1f2a',
          darkest: '#350c13',
        },
        grey: {
          light: '#F2F2F2',
          medium: '#676767',
          dark: '#222222',
        }
      },
      minHeight: {
        '96': '24rem',
        '192': '48rem'
      },
      transitionDuration: {
        '0': '0ms',
      },
      fontFamily: {
        sans: ["Open Sans", "sans-serif"],
        title: ["Scheherazade New", "sans-serif"]
      },
      spacing: {
        '025': '1px',
        '05': '2px',
        '075': '3px',
      },
      transformOrigin: {
        'hamburger': '0.475rem',
      },
      width: {
        '192': '48rem',
      },
      zIndex: {
        '-1': '-1',
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['even'],
      borderColor: ['even'],
      border: ['even'],
      width: ['even'],
      margin: ['even'],
      padding: ['even'],
      outline: ['focus'],
      boxShadow: ['focus'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
