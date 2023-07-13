/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html",
  ],
  safelist: [
    {
      pattern: /col-span-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']

    },
    {
      pattern: /grid-cols-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']
    },
    'bg-brand-purple',
    'text-brand-purple'
  ],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      '2xl': '1400px'
    },
    extend: {
      colors: {
        'brand-blue': '#052e45',
        'brand-darkblue': '#112233',
        'brand-gold': '#d8b073',
        'brand-darkgold': '#a58350',
        'brand-white': '#FFFFFF',
      },
      fontSize: {
        h1: ['35px', '43px'],
        "h1-desktop": ['60px', '68px'],
        h2: ['30px', '38px'],
        "h2-desktop": ['50px', '58px'],
        h3: ['25px', '33px'],
        "h3-desktop": ['40px', '48px'],
        h4: ['20px', '28px'],
        "h4-desktop": ['30px', '38px'],
        h5: ['18px', '26px'],
        "h5-desktop": ['20px', '28px'],
        p: ['16px', '24px'],
      },
      fontFamily: {
        'Tahoma': "'Tahoma', 'sans-serif'",
        'Novecento-sans': "'Novecento-sans', 'sans-serif'"
      }
    },
  },
  plugins: [],
}

