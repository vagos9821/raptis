/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            transitionProperty: {
                colors: "color, background-color, border-color, text-decoration-color, fill, stroke, --tw-ring-color",
            },
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "gradient-conic":
                    "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
            },
            fontSize: {
                sm: "0.750rem",
                base: "1rem",
                xl: "1.333rem",
                "2xl": "1.777rem",
                "3xl": "2.369rem",
                "4xl": "3.158rem",
                "5xl": "4.210rem",
            },
            fontFamily: {
                heading: "Poppins",
                body: "Poppins",
            },
            fontWeight: {
                normal: "400",
                bold: "700",
            },
            colors: {
                text: "#000000",
                background: {
                    DEFAULT: "#ededed",
                    dark: "#333333",
                },
                primary: {
                    DEFAULT: "#333333",
                    dark: "#ededed",
                },
                secondary: "#999999",
                accent: "#d5ab67",
            },
        },
    },
    plugins: [
        function ({ addBase, theme }) {
            addBase({
                body: {
                    backgroundColor: theme("colors.background.DEFAULT"),
                    color: theme("colors.gray.900"),
                },
                "body.dark": {
                    backgroundColor: theme("colors.background.dark"),
                    color: theme("colors.gray.100"),
                },
                ".bg-background": {
                    backgroundColor: theme("colors.background.DEFAULT"),
                },
                ".dark .bg-background": {
                    backgroundColor: theme("colors.background.dark"),
                },
                ".bg-primary": {
                    backgroundColor: theme("colors.primary.DEFAULT"),
                },
                ".dark .bg-primary": {
                    backgroundColor: theme("colors.primary.dark"),
                },
                ".bg-accent": {
                    backgroundColor: theme("colors.accent.DEFAULT"),
                },
                ".dark .bg-accent": {
                    backgroundColor: theme("colors.accent.dark"),
                },
                ".text-background": {
                    color: theme("colors.background.DEFAULT"),
                },
                ".dark .text-background": {
                    color: theme("colors.background.dark"),
                },
                ".text-primary": {
                    color: theme("colors.primary.DEFAULT"),
                },
                ".dark .text-primary": {
                    color: theme("colors.primary.dark"),
                },
                ".text-gray-900": {
                    color: theme("colors.gray-900.DEFAULT"),
                },
                ".dark .text-gray-900": {
                    color: theme("colors.primary.dark"),
                },
                ".text-gray-600": {
                    color: theme("colors.gray-600.DEFAULT"),
                },
                ".dark .text-gray-600": {
                    color: theme("colors.primary.dark"),
                    opacity: 0.75,
                },
            });
        },
    ],
};
