const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const Dotenv = require("dotenv-webpack");

module.exports = (env, argv) => {
  return {
    entry: {
      main: "./src/index.js",
      style: "./src/style.js"
    },

    output: {
      filename: "[name].bundle.js",
      path: path.resolve(__dirname, "dist")
    },

    devtool: "source-map",

    module: {
      rules: [
        {
          test: /\.scss$/,
          exclude: /(node_modules)/,
          use: [
            MiniCssExtractPlugin.loader,
            {
              loader: "css-loader",
              options: {
                sourceMap: true,
                url: false
              }
            },
            {
              loader: "postcss-loader",
              options: {
                ident: "postcss",
                plugins: [require("autoprefixer")()]
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: true,
                sassOptions: {
                  outputStyle: argv.mode === "production" ? "compressed" : "expanded",
                },
              },
            }
          ]
        },
        {
          test: /\.js$/,
          exclude: /(node_modules)/,
          use: {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"]
            }
          }
        }
      ]
    },

    plugins: [
      new Dotenv({
        path: "./.env"
      }),
      new MiniCssExtractPlugin({
        filename: "[name].css",
        chunkFilename: "[id].css"
      })
    ]
  };
};
