# Strona www dla masarnia staropolska

Webpack ze strony https://stevenwestmoreland.com/2018/01/how-to-include-bootstrap-in-your-project-with-webpack.html

# Instrukcja -  How to include Bootstrap in your project with Webpack
# 1.0
Local Installation
npm install --save-dev webpack
# or specific version
npm install --save-dev webpack@<version>

$ mkdir bootstrap-webpack && cd bootstrap-webpack
$ npm init -y
$ npm install webpack --save-dev

Create the following directory structure for your project, separating the “source” code /src from our bundled “distribution” code /dist.

Project structure

  bootstrap-webpack
  |- package.json
+ |- /dist
+   |- index.html
+ |- /src
+   |- app.js

# Installing Bootstrap

Use the following command to install Bootstrap and its peer dependencies, jQuery and Popper:

$ npm install bootstrap jquery popper.js --save

If you choose to import Bootstrap’s JavaScript plugins individually as needed, you must also install exports-loader.

$ npm install exports-loader --save-dev

You’ll need to install the required loaders and postcss plugins for compiling and bundling Bootstrap precompiled Sass files.

$ npm install autoprefixer css-loader node-sass postcss-loader sass-loader 

webpack.config.js

const path = require('path');

module.exports = {
  entry: './src/app.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist')
  },
  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: [
          {
            // Adds CSS to the DOM by injecting a `<style>` tag
            loader: 'style-loader'
          },
          {
            // Interprets `@import` and `url()` like `import/require()` and will resolve them
            loader: 'css-loader'
          },
          {
            // Loader for webpack to process CSS with PostCSS
            loader: 'postcss-loader',
            options: {
              plugins: function () {
                return [
                  require('autoprefixer')
                ];
              }
            }
          },
          {
            // Loads a SASS/SCSS file and compiles it to CSS
            loader: 'sass-loader'
          }
        ]
      }
    ]
  }
};

# Importing Bootstrap JavaScript

When importing Bootstrap’s Sass source files you can include all of Bootstrap, or pick only the parts you need. Update your project’s directory structure and create a new file /src/scss/app.scss.
Project structure

  bootstrap-webpack
  |- package.json
  |- webpack.config.js
  |- /dist
    |- index.html
  |- /src
    |- app.js
+   |- /scss
+     |- app.scss

Import all of Bootstrap’s Sass by adding this line to app.scss
app.scss – Include all of Bootstrap

@import "~bootstrap/scss/bootstrap";

Alternatively, you may import parts of Boostrap individually as needed. Note that Bootstrap’s functions, variables and mixins are required. See the boostrap.scss file for the full import stack.
app.scss – Include parts of Bootstrap

// Required
@import "~bootstrap/scss/functions";
@import "~bootstrap/scss/variables";
@import "~bootstrap/scss/mixins";

// Optional
@import "~bootstrap/scss/reboot";
@import "~bootstrap/scss/type";
@import "~bootstrap/scss/images";
@import "~bootstrap/scss/code";
@import "~bootstrap/scss/grid";

Finally, include Bootstrap’s Sass in your bundle by adding this line to your app’s entry point /src/app.js:

import './scss/app.scss';

# Bundling with Webpack

Edit your package.json file to add a npm script to run the webpack command.
package.json

  {
    "name": "bootstrap-webpack",
    "version": "1.0.0",
    "description": "",
    "main": "index.js",
    "scripts": {
+     "build": "webpack",
      "test": "echo \"Error: no test specified\" && exit 1"
    },
    "keywords": [],
    "author": "",
    "license": "MIT",
    "devDependencies": {
      "autoprefixer": "^7.2.5",
      "css-loader": "^0.28.9",
      "exports-loader": "^0.6.4",
      "node-sass": "^4.7.2",
      "postcss-loader": "^2.0.10",
      "precss": "^3.0.0",
      "sass-loader": "^6.0.6",
      "style-loader": "^0.19.1",
      "webpack": "^3.10.0"
    },
    "dependencies": {
      "bootstrap": "^4.0.0",
      "jquery": "^3.2.1",
      "popper.js": "^1.12.9"
    }
  }

  # pluginy do działania strony

  1. Categories Images
  https://pl.wordpress.org/plugins/categories-images/
  2. Remove Category URL
  https://pl.wordpress.org/plugins/remove-category-url/