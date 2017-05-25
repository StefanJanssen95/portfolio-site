// http://eslint.org/docs/user-guide/configuring

module.exports = {
  root: true,
  parser: 'babel-eslint',
  parserOptions: {
    sourceType: 'module'
  },
  env: {
    browser: true,
  },
  extends: 'airbnb-base',
  // required to lint *.vue files
  plugins: [
    'html'
  ],
  // check if imports actually resolve
  'settings': {
    'import/resolver': {
      'webpack': {
        'config': 'build/webpack.base.conf.js'
      }
    }
  },
  // add your custom rules here
  'rules': {
    "comma-dangle": [2,"always-multiline"],
    "no-cond-assign": [2,"except-parens"],
    "no-constant-condition": 2,
    "no-control-regex": 1,
    "no-dupe-args": 2,
    "no-dupe-keys": 2,
    "no-duplicate-case": 2,
    "no-empty-character-class": 2,
    "no-empty": 2,
    "no-ex-assign": 2,
    "no-extra-boolean-cast": 2,
    "no-extra-semi": 2,
    "no-func-assign": 2,
    "func-names": [1, "never"],
    "no-inner-declarations": [2,"functions"],
    "no-invalid-regexp": 2,
    "no-irregular-whitespace": 2,
    "no-obj-calls": 2,
    "no-regex-spaces": 1,
    "no-sparse-arrays": 2,
    "no-unreachable": 1,
    "use-isnan": 2,
    "valid-typeof": 2,
    "no-unexpected-multiline": 2,
    "consistent-return": 2,
    "curly": [2,"all"],
    "eqeqeq": [2,"smart"],
    "no-alert": 2,
    "no-else-return": 2,
    "no-eval": 2,
    "no-floating-decimal": 2,
    "no-implied-eval": 2,
    "no-lone-blocks": 2,
    "no-loop-func": 2,
    "no-redeclare": 1,
    "no-self-compare": 2,
    "no-sequences": 2,
    "no-delete-var": 2,
    "no-unused-vars": 2,
    "brace-style": [2,"1tbs",{"allowSingleLine":true}],
    "camelcase": 0,
    "comma-spacing": [2,{"after":true}],
    "comma-style": 2,
    "eol-last": 2,
    "indent": 2,
    "key-spacing": 0,
    "new-cap": 2,
    "new-parens": 2,
    "newline-after-var": [2,"always"],
    "no-array-constructor": 2,
    "no-nested-ternary": 2,
    "no-new-object": 2,
    "no-spaced-func": 2,
    "no-trailing-spaces": [2,{"skipBlankLines":true}],
    "operator-assignment": [2,"always"],
    "space-before-blocks": [2,"never"],
    "space-before-function-paren": ["error", "never"],
    "space-in-parens": ["error", "always"],
    "space-infix-ops": [2,{"int32Hint":true}],
    "spaced-comment": [2,"always",{}],
    "arrow-parens": [2,"always"],
    "arrow-spacing": [2,{"before":true,"after":true}],
    "no-const-assign": 2,
    "no-var": 2,
    "object-shorthand": [2,"always"],
    "prefer-const": 2,
    "prefer-spread": 2,
    "keyword-spacing": [2, {
      "before": false,
      "after": false,
      "overrides": {
        "return": {
          "after": true
        },
        "from": {
          "after": true
        }
      }
    }],
    // don't require .vue extension when importing
    'import/extensions': ['error', 'always', {
      'js': 'never',
      'vue': 'never'
    }],
    // allow optionalDependencies
    'import/no-extraneous-dependencies': ['error', {
      'optionalDependencies': ['test/unit/index.js']
    }],
    // allow debugger during development
    'no-debugger': process.env.NODE_ENV === 'production' ? 2 : 0
  }
}
