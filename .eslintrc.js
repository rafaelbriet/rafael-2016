/**************************************************
* http://eslint.org/docs/rules/
**************************************************/

module.exports = {

    "extends": "eslint:recommended",

    /**************************************************
    * Environments
    **************************************************/
    "env": {
        "browser": true,
        "node": false,
        "jquery": false,
        "mongo": false,
    },

    /**************************************************
    * Rules
    **************************************************/
    "rules": {

        // Possible Errors
        "comma-dangle": [1, "always"],
        "no-extra-semi": 1,
        "no-inner-declarations": 2,

        // Best Practices
        "curly": 2,
        "eqeqeq": 2,
        "no-eval": 2,
        "no-empty-function": 1,
        "no-extend-native": 2,
        "no-multi-spaces": 2,
        "no-new-wrappers": 2,
        "no-with": 2,

        // Strict Mode
        "strict": [2, "global"],

        // Variables
        "no-undef": 2,

        // Stylistic Issues
        "array-bracket-spacing": [2, "never"],
        "brace-style": [2, "stroustrup", { "allowSingleLine": true }],
        "indent": [2, "tab"],
        "no-array-constructor": 2,
        "no-mixed-spaces-and-tabs": 2,
        "no-new-object": 2,
        "object-curly-spacing": [2, "never"],
        "semi": 2,
    }
}
