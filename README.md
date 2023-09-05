# nwootheme start theme for woocommerce

## Features

- Custom Home page.
- Single Product Page
- Custom Cart Page
- Custom Checkout Page

## Uses

- TailwindCSS
- Webpack
- Babel
- Sass

## Maintainer

1. clone in wordpress theme folder
2. Make sure WooCommerce plugin is active.


### After cloning the repo install all node modules
```bash
cd nwootheme/assets
npm npm install 
```
### If many deprecated packeges in package.json devDependencies will be make 3 steps
#### 1.Delete package and package-lock files to create new ones. In folder nwootheme\assets run command
       npm init
####  2. Correct you package.json file with the example:       
    {
       "name": "n-woo-theme",
       "version": "1.0.0",
       "description": "starter woocommerce theme",
       "main": "main.js",
       "scripts": {
          "build": "cross-env NODE_ENV=production webpack --mode production --progress",
          "dev": "cross-env NODE_ENV=development webpack --watch --mode development --progress",
          "clean": "rm -rf build/*"
       },
       "repository": {
       "type": "git",
       "url": "git+https://github.com/wstudionatali/nwootheme.git"
       },
       "keywords": [
       "woprdpress",
       "woocommerce",
       "theme",
       "starter"
        ],
       "author": "wstudionatali",
       "license": "ISC",
       "bugs": {
          "url": "https://github.com/wstudionatali/nwootheme/issues"
        },
       "homepage": "https://github.com/wstudionatali/nwootheme#readme",
       "browserslist": [
         "defaults"
        ],
    } 

#### 2. Change deprecated packages from the list below. Install them:
    npm install -D webpack webpack-cli clean-webpack-plugin 
    npm install -D terser-webpack-plugin cross-env css-loader cssnano file-loader mini-css-extract-plugin
    npm install -D node-sass css-minimizer-webpack-plugin sass-loader sass-mq style-loader
    npm install -D postcss-loader postcss-import postcss-preset-env tailwindcss
    npm i --save lodash

**During development**

```bash
cd assets
npm run dev
```

**Production**

```bash
cd assets
npm run build
```
**Clean build dir**
```bash
cd assets
npm run clean
```

**for Windows in package.json use**
     "scripts": {
         "clean": "rd /q -r  build" 
     },
**for Linux in package.json use**
     "scripts": {
          "clean": "rm -rf build/*"
     }, 
#### If you use tailwind support for block editor you should follow one of the pieces of advice:
##### 1. Safelist classes in your Tailwind configuration file (if you know in advance what the classes will be)
##### 2. Use Twind’s shim module to translate Tailwind utility classes into CSS using JavaScript
        <script type="module" src="https://cdn.skypack.dev/twind/shim"></script>
           or
        import shim from 'https://cdn.skypack.dev/twind/shim';  /* put the line in linked script.js file */     