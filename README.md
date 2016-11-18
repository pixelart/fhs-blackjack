Black Jack with Symfony
=======================

If you are new, clone this project and install vendors:

    git clone https://github.com/pixelart/fhs-blackjack.git
    composer install

If you were at the lectures and already have the project, clean up
your changes and pull the latest state from here:

Be careful to do this in your project directory, where you have cloned it!

    git clean -fd && git reset HEAD . && git checkout .
    git pull
    composer install

Adapt your PHP installation
---------------------------

### Windows users

Make sure you have the following extensions uncommented in your `php.ini`:

```
extension=php_curl.dll
extension=php_fileinfo.dll
extension=php_gd2.dll
extension=php_intl.dll
extension=php_mbstring.dll
extension=php_openssl.dll
extension=php_pdo_sqlite.dll
```

### Mac users

It's already included in your PHP install.

### Ubuntu users

You need to install the following packages:

```
sudo apt install php-intl php-opcache php-sqlite3 php-xdebug
```
