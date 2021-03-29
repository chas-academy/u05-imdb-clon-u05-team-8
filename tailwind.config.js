const defaultTheme = require("tailwindcss/defaultTheme");
// const plugin = require("tailwindcss/plugin");

module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),

        // plugin(function ({ addBase, theme }) {
        //     addBase({
        //         h1: { fontSize: theme("fontSize.2xl") },
        //         h2: { fontSize: theme("fontSize.xl") },
        //         h3: { fontSize: theme("fontSize.lg") },
        //     });
        // }),
    ],
};
