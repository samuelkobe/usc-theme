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
          accent: '#FC8658',
          main: '#2EB8C1',
          dark: '#466271',
          neutral: '#B4A99D',
          black: '#2E2C2C',
        },
        grey: {
          light: '#F2F2F2',
          medium: '#B4B4B4',
          dark: '#2E2C2C',
        }
      },
      minWidth: {
        '32': '8rem',
        '40': '10rem',
      },
      minHeight: {
        '96': '24rem',
        '192': '48rem'
      },
      transitionDuration: {
        '0': '0ms',
      },
      fontFamily: {
        sans: ["Lato", "sans-serif"],
        title: ["Lato", "sans-serif"],
        button: ["Nunito", "sans-serif"]
      },
      spacing: {
        '025': '1px',
        '05': '2px',
        '075': '3px',
        '1/12': '8.3333%',
        '1/6': '16.6667%',
      },
      transformOrigin: {
        'hamburger': '0.475rem',
      },
      transitionProperty: {
        'height': 'height',
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
