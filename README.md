# recycleabike
Recycle-a-Bike website

# Working locally

## Initial setup for local site
Clone this repository

[Install Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

From the root of the repository on your local machine, run [Composer's install command](https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies). This will install WordPress Core and the specified plugins. Note that if you installed Composer globally on your machine, the command is `composer install` but if you installed Composer locally within the repository, the command is `php composer.phar install`. 

You may need to create [the default .htaccess file](https://wordpress.org/support/article/htaccess/#basic-wp) in the root of your local repository.

Create or import a local database (ask [Mike](https://github.com/mrengy) if you need a copy from production). Change whatever database contents need to be changed: references to the site url throughout, user passwords.

Make a copy of wp-config-sample.php and name it wp-config.php. Edit it with your local database details. This is important - don't skip this step and run the browser-based install. The wp-config-sample.php has some lines that set custom paths for the WordPress installation that are required for the site to run.



## Keeping local site up to date
Run "git pull" in the local root of the repository as you would normally. In order to update dependencies (which may have changed in the code), run [Composer Update](https://getcomposer.org/doc/01-basic-usage.md#updating-dependencies-to-their-latest-versions). (again, note that if you installed Composer locally rather than globally on your machine, the command is `php composer.phar update` )

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

htaccess username: demo

password: demo123

# Archive Site
http://archive.recycleabike.org

contains all the content that was on the site as of the end of 2020, before this overhaul began.

An independent installation of WordPress with its own database, and some other non-WordPress content that was on the server.

htaccess username: demo

password: demo123
