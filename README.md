# **WP StarPack**

Starting Pack Template theme for WordPress - Created by [Benjamin Jaume](http://www.benjaminjau.me)

- 4 fonts included: **Manrope**, **Roboto**, **Jost**, **Lato** from Google Fonts, and 1 custom font: **Kollektif**
- All basic CSS and JS libraries included (see complete list below)
- Works with `scss` to compile css
- Menus, Post thumbnails & Templates **enabled**
- Possibility to `console.log` content with the simple function
  ```php
      <?php console('<content_here>') ?>
  ```
- Maximum file size upgraded to 100 Mb
- Converting tool to format file sizes
  ```php
  formatBytes($bytes, $precision)
  ```
- Miscellaneous functionnalities for the WYSIWYG with ACF

# Getting started

2. Run `npm i`
3. Run `npm run css` while editing scss files

Create the logo, then use [https://favicon.io/](https://favicon.io/). With the ZIP file created, extract it into the folder `"medias/favicons"`.

## Recommended plugins

- ACF (Advanced Custom Fields)
- All In One WP Security
- Classic Editor
- Contact Form 7
- Contact From 7 Captcha
- GTranslate
- Really Simple SSL
- Smush
- SVG Flags
- Updraft
- Yoast

# CSS librairies included

Important to note that all CSS are compacted in a "app.css" file. It may cause loading problems when users have a slow connection. Even though it is minified.

### [Animate](https://www.npmjs.com/package/animate.css)

- Version: 4.1.1
- Description: library of ready-to-use, cross-browser animations for use in your web projects. Great for emphasis, home pages, sliders, and attention-guiding hints.

### [AOS](https://www.npmjs.com/package/aos)

- Version: 2.3.4
- Description: Animate On Scroll. Small library to animate elements on your page as you scroll

### [Bootstrap](https://www.npmjs.com/package/bootstrap)

- Version: 4.6.0
- Description: Famous CSS framework

### [bootstrap-rfs](https://github.com/coliff/bootstrap-rfs)

- Version: For Bootstrap 4.3+
- Description: Responsive Font Sizes (RFS) for Bootstrap 4

### [Fontawesome](https://www.npmjs.com/package/@fortawesome/fontawesome-free)

- Version: 5.15.2
- Description: Cool icon librairy

### [Hover](https://www.npmjs.com/package/hover.css)

- Version: 2.3.2
- Description: A collection of CSS3 powered hover effects to be applied to links, buttons, logos, SVG, featured images and so on.

### [Normalize](https://www.npmjs.com/package/@csstools/normalize.css)

- Version: 11.0.1
- Description: CSS library that provides consistent, cross-browser default styling of HTML elements.

### [RFS](https://www.npmjs.com/package/rfs)

- Version: 9.0.3
- Description: Unit resizing engine which was initially developed to resize font sizes (hence its abbreviation for Responsive Font Sizes).

### [Select2](https://www.npmjs.com/package/select2)

- Version: 4.0.13
- Description: The jQuery replacement for select boxes

### [Select2-boostrap4](https://www.npmjs.com/package/@ttskch/select2-bootstrap4-theme)

- Version: 1.3.4
- Description: Select2 v4 theme for Bootstrap4 (Compatible to boostrap 4.0.0+)

# JS librairy

### [Bootstrap](https://www.npmjs.com/package/bootstrap)

- Version: 4.6.0
- Description: Famous CSS framework

### [Jquery](https://jquery.com)

- Version: 3.5.1
- Description: Famous CSS framework

### [Select2](https://www.npmjs.com/package/select2)

- Version: 4.0.13
- Description: The jQuery replacement for select boxes

# PHP librairy

### [WP Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker)

- Website: [https://wp-bootstrap.org](https://wp-bootstrap.org)
- Version: 4.3.0
- Description: A custom WordPress Nav Walker Class to fully implement the Bootstrap 4 navigation style in a custom theme using the WordPress built in menu manager.
