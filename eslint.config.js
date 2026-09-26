const js = require( '@eslint/js' );
const globals = require( 'globals' );

module.exports = [
	{
		ignores: [ 'vendor/', 'node_modules/', 'button-handler.js' ],
	},
	js.configs.recommended,
	{
		languageOptions: {
			ecmaVersion: 'latest',
			sourceType: 'script',
			globals: {
				...globals.browser,
				...globals.jquery,
			},
		},
	},
];
