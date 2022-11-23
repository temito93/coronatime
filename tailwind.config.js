/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            backgroundColor: {
                "custom-green-500": "#0FBA68",
            },
            colors: {
                "custom-black": "#010414",
                "custom-blue-700": "#2029F3",
                "custom-zinc": "#808189",
            },
            borderColor: {
                "custom-neutral-200": "#E6E6E7",
            },
            placeholderColor: {
                "custom-zinc": "#808189",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
