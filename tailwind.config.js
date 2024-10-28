/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ['InterMedium', '"Helvetica Neue"', 'Helvetica', 'Arial', 'sans-serif'],
      },
      gridTemplateRows: {
        '[auto,auto,1fr]': 'auto auto 1fr',
      },
      colors: {
        primary: '#4F3267',  // Primary color
        secondary: '#DE57E5', // Secondary color
        textPrimary: '#4F3267', // Text primary color
        textSecondary: '#DE57E5', // Text secondary color
      },
      backgroundColor: {
        primary: '#4F3267',  // Primary background color
        secondary: '#f6f3f9', // Secondary background color
      },
      borderColor: {
        primary: '#4F3267',  // Primary border color
        secondary: '#f6f3f9', // Secondary border color
      },
      backgroundImage: {
        'primary-gradient': 'linear-gradient(90deg, #4F3267 0%, #DE57E5 100%)',
        'secondary-gradient': 'linear-gradient(to right, #de57e5, #8863fb)',
      },
      screens: {
        'xs': '475px',   // Extra small screens (custom)
        'sm': '640px',   // Small screens
        'md': '768px',   // Medium screens
        'lg': '1024px',  // Large screens
        'xl': '1280px',  // Extra large screens
        '2xl': '1536px', // Larger screens
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
  ],
}
