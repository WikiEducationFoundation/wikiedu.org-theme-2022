# Custom WordPress Theme for the Wiki Education Website

This is a child theme of the Understrap Starter Theme => https://github.com/understrap/understrap

# Basic Features
- Combines Underscore’s PHP/JS files and Bootstrap’s HTML/CSS/JS.
- Comes with Bootstrap v4 Sass source files and additional .scss files.
- Uses sass and postCSS to handle compiling all of the styles into one style sheet. The theme also includes rollup.js to handle javascript compilation and minification.
- Uses a single minified CSS file for all the basic stuff.
- Font Awesome integration (v4.7.0)
- Jetpack ready
- WooCommerce support
- Contact Form 7 support
- Translation ready

---

# Installing dependencies
- Make sure you have installed Node.js
- Then open your terminal and browse to the location of your theme copy
- Run: npm install

# Running
To work and compile your Sass files on the fly start:
`npm run watch`

# Overriding Default Styles and Scripts
Add your own CSS styles to /src/sass/theme/_child_theme.scss or import your own files into /src/sass/theme/_child-theme.scss

To overwrite Bootstrap's or Understrap's base variables just add your own value to:/src/sass/theme/_child_theme_variables.scss
