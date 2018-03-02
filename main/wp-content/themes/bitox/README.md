## Setup

Install [NodeJS](https://nodejs.org/en/)  
Install [Yarn](https://yarnpkg.com)  
Plugin for editor [Editorconfig](http://editorconfig.org)  

## Project start

Edit the file `projectConfig.json` to specify your own domain for development.  

Open this folder in the console and install dependencies  

```bash
yarn install
npm install -g gulp-cli
```

## Gulp commands

`gulp` - Run a project for development, a proxy server and file tracking  
`gulp build` - minify styles  
`gulp sprite` - build a sprite  

## Theme structure

```
<theme_name>/
├── /assets/               # Theme resources.
│   ├── /css/              # CSS libraries..
│   ├── /dist/             # Compiled styles (Never edited).
│   ├── /fonts/            # Fonts.
│   ├── /images/           # Images.
│   │   └── /icons/        # Images for the sprites.
│   ├── /scripts/          # Scripts of the project.
│   └── /sass/             # See the structure of the folder below.
├── /include/              # PHP files included. to function.php
├── /node_modules/         # Node modules. (Never edited).
├── /template-parts/       # Template parts included in page templates.
│   ├── comments.php       # Template for displaying comments.
│   ├── content-none.php   # Used if there are no posts.
│   ├── content-page.php   # Output the contents of the page.
│   ├── content-search.php # A template for displaying search results.
│   ├── content-single.php # Output the contents of the post.
│   ├── content.php        # Default template for post content.
│   ├── head.php           # The contents of the head tag.
│   └── sidebar.php        # Content sidebar.
└── .editorconfig          # Configure the editor.
└── .gitignore
└── 404.php # Page 404.
└── footer.php
└── function.php
└── gulpfile.js            # Configuration for Gulp.
└── header.php
└── index.php
└── package.json           # Packages for NPM.
└── page.php               # Template for all pages.
└── projectConfig.json     # Configuration of the project.
└── screenshot.png         # Screenshot for admin.
└── search.php             # A template for displaying search results.
└── single.php             # Template for the post.
└── style.css              # To determine the theme.
└── template-custom.php    # Template for the page (Example).
```

## Sass folder structure

```
<theme_name>/assets/sass/
├── /block/                # Styles for repeating blocks.
├── /elements/             # Styles for elements.
├── /pages/                # Styles for pages.
└── _base.scss             # Basic styles. Box sizing.
└── _mixins.scss           # Myxins.
└── _sprite.scss           # Sprites. (Never edited).
└── _typography.scss       # Typography of the project.
└── _variables.scss        # Variables.
└── _wp-classes.scss       # Styles for standard WP elements.
└── main.scss              # The compiled file.
```
