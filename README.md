# WP Webpack

Due to spending much time to develop theme for Wordpress, I need the best project structure to do this.

I found some repos support this purpose, so I
forked them and made this repo with some customizations.

> Make Wordpress theme development great again.

## Features

- Modern JavaScript through Webpack
- Live reload via BrowserSync
- SCSS support
- Easy dev environments with Docker Compose
- Stateless, immutable plugin management via Composer
- Helpful HTML5 Router for firing JS based on Wordpress page slug.
- Support HTTP/HTTPS
- Manage Wordpress with WP-CLI
- Nothing else.

## Requirements

- Node.js
- Yarn
- PHP and Composer
- Docker for Mac / Windows
- Docker Compose

## Getting Started

```bash
git clone git@github.com:lbngoc/wordpress-webpack.git
yarn install
yarn setup
composer install # if you want plugins ( not required )
yarn serve
```

## Developing Locally

To work on the theme locally, open another window/tab in terminal and run:

```bash
yarn serve
```

This will open a browser, watch all files (php, scss, js, etc) and reload the
browser when you press save.

## Building for Production

To create an optimized production build, run:

```bash
yarn build
```

This will minify assets, bundle and uglify javascript, and compile scss to css.
It will also add cachebusting names to then ends of the compiled files, so you
do not need to bump any enqueued asset versions in `functions.php`.

## Referrences

- [Presspack](https://github.com/jaredpalmer/presspack)
- [webpack-wordpress](https://github.com/sloansparger/webpack-wordpress)

## Maintainer

- [Ngoc L.](https://ngoclb.com)