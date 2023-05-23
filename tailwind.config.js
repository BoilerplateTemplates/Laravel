const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        debugScreens: {
            position: ["top", "right"],
        },
        extend: {
            colors: {
                "brand-primary": "#292826",
                "brand-secondary": "#F9D342",
                "brand-tertiary": "#30BCED",
            },
            gridTemplateColumns: {
                16: "repeat(16, minmax(0, 1fr))",
                20: "repeat(20, minmax(0, 1fr))",
            },
        },
        fontFamily: {
            "sans-titles": ["Nunito", ...defaultTheme.fontFamily.sans],
            sans: ["Inter", ...defaultTheme.fontFamily.sans],
        },
    },
    plugins: [
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
        require("tailwindcss-debug-screens"),
    ],
};
