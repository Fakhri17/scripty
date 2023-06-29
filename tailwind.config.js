/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
		"node_modules/preline/dist/*.js",
	],
	theme: {
		extend: {
			fontFamily: {
				poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
			},
			colors: {
				"main-color": "#AA0000",
			},
		},
	},
	plugins: [require("preline/plugin")],
};
