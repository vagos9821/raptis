/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
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
                background: "#ededed",
                primary: "#333333",
                secondary: "#999999",
                accent: "#d5ab67",
            },
        },
    },
    plugins: [],
};
