# recycleabike
Recycle-a-Bike website

# Working locally

## Initial setup for local site
_to be written_

## Keeping local site up to date
_to be expanded_
Run "composer update" after each "git pull"

## Working with the theme
_to be expanded_
Composer (see below) tracks a separate repository that contains the theme as a dependency: [recycleabike_theme](https://github.com/mrengy/recycleabike-theme). Edit the code in that repository. Running "composer update" from the root will pull that repository along with all other dependencies.

# Technical details

## Composer
This site uses Composer for dependency management and treats WordPress Core, plugins, and themes as dependencies. The goal is to enable automatic updates with minimal maintenance while also version controlling the active theme using Github.

The approach follows [this tutorial](https://medium.com/@halles/wordpress-composer-git-1ccf29a9827a).



## SASS
We use [SASS](https://sass-lang.com) for fancy things that SASS provides, and we compile it to CSS locally.

Edit code in the .scss file rather than editing .css files directly.

To build the debug CSS and minified CSS, run `make` from the command line in the neve-child directory.
To "watch" the minified CSS, run `make watch` from the command line in the neve-child directory.

# Development Site
http://devsite.recycleabike.org

username: demo

password: demo123
