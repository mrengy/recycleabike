# recycleabike
Recycle-a-Bike website

# Working locally

## Initial setup for local site
_to be written_

Clone this repository

Install [Composer](https://getcomposer.org/)

You may need to create [the default .htaccess file](https://wordpress.org/support/article/htaccess/#basic-wp) in your local top level directory.

## Keeping local site up to date
_to be expanded_
Run "composer update" after each "git pull"

## Working with the theme
_to be expanded_
Composer (see below) tracks a separate repository that contains the theme as a dependency: [recycleabike_theme](https://github.com/mrengy/recycleabike-theme). Edit the code in that repository. Running "composer update" from the root will pull that repository along with all other dependencies.

# Technical details

## Composer
This site uses [Composer](https://getcomposer.org/) for dependency management and treats WordPress Core and plugins as dependencies. The goal is to enable automatic updates with minimal maintenance and easily keeping multiple environments (including local) in sync while also version controlling the active theme using Github.

The approach follows [the main idea in this Medium post](https://medium.com/@halles/wordpress-composer-git-1ccf29a9827a), except that the theme(s) and list of dependencies are all in the same repository. Also, there are some corrections (like up to date sources of dependencies) taken from [this Roots tutorial](https://roots.io/using-composer-with-wordpress/).



## SASS
We use [SASS](https://sass-lang.com) for fancy things that SASS provides, and we compile it to CSS locally.

Edit code in the .scss file rather than editing .css files directly.

To build the debug CSS and minified CSS, run `make` from the command line in the neve-child directory.
To "watch" the minified CSS, run `make watch` from the command line in the neve-child directory.

# Development Site
http://devsite.recycleabike.org

An independent installation of WordPress with its own database. This site is [set to automatically update every minute from the master branch in Github](https://stackoverflow.com/a/9006987/370407).

username: demo

password: demo123

# Archive Site
http://archive.recycleabike.org

contains all the content that was on the site as of the end of 2020.

An independent installation of WordPress with its own database, and some other non-WordPress content that was on the server.

username: demo

password: demo123
