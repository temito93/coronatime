/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                "custom-green-500": "#0FBA68",
                "custom-black": "#010414",
                "custom-blue-700": "#2029F3",
                "custom-zinc": "#808189",
                "custom-neutral-200": "#E6E6E7",
                "custom-green": "#249E2C",
                "custom-red": "#CC1E1E",
                "custom-neutral-100": "#F6F6F7",
                "custom-yellow-400": "#EAD621",
                "custom-stone-300": "#BFC0C4"
            },
            boxShadow: {
                "custom": "1px 2px 8px rgba(0, 0, 0, 0.04)"
            }
        },
        screens: {
            'mobile': '375px',
            'desktop': '1200px'
        }
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('tailwind-scrollbar')({ nocompatible: true })
    ],
};
