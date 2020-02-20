module.exports = {
  theme: {
    extend: {
      colors: {
        'jeepney-color' : '#1992d4',
        'flat1' : '#f3f9fb',
        'flat2' : '#87c0cd',
        'flat3' : '#ff7517',
        'flat4' : '#113f67',
        'flat5' : '#ffa41b',
        'flat6' : '#c81912',
        'gold1' : '#ffcc00',
        'smoke-darkest': 'rgba(0, 0, 0, 0.9)',
        'smoke-darker': 'rgba(0, 0, 0, 0.75)',
        'smoke-dark': 'rgba(0, 0, 0, 0.6)',
        'smoke': 'rgba(0, 0, 0, 0.5)',
        'smoke-light': 'rgba(0, 0, 0, 0.4)',
        'smoke-lighter': 'rgba(0, 0, 0, 0.25)',
        'smoke-lightest': 'rgba(0, 0, 0, 0.1)',
      },
      spacing: {
        '72' : '18rem',
        '80' : '20rem',
        'seven' : '28rem',
        'eight' : '48rem',
      },
      fontSize: {
        'gigantic' : '8rem',
        'gigantic2' : '16rem',
      },
      minHeight: { 
        '10': '10rem',
      },
    }
  },
  
  variants: {
    borderCollapse: ['responsive', 'hover'],
    borderColor: ['responsive', 'hover', 'focus'],
    borderStyle: ['responsive', 'hover'],
    borderWidth: ['responsive', 'hover'],
  },
  plugins: [
    require('tailwindcss-plugins/pagination'),

  ]
}
