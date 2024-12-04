import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, daisyui],

    daisyui: {
        themes: [
            {
                lantana: {
                    primary: "#d92020",
                    secondary: "#d67a7a",
                    accent: "#d52a2a",
                    neutral: "#1d1616",
                    "base-100": "#f5efef",
                },
            },
            {
                lantanadark: {
                    primary: "#df2626",
                    secondary: "#852929",
                    accent: "#d52b2b",
                    neutral: "#e9e3e3",
                    "base-100": "#0f0909",
                },
            },
        ],
        darkTheme: "lantanadark",
    },
};
