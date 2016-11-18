Black Jack with Symfony
=======================

Clone this project:

    git clone https://github.com/pixelart/fhs-blackjack.git
    
Now remove the vendor folder from git:

    git rm --cached -r vendor/
    
Uncomment the `vendor/` in your `.gitignore` and commit the changes:
 
    git commit -am "Removed vendor from git"


Ubuntu users
------------

You need to install the following packages:

```
sudo apt-get install php-curl php-intl php-json php-opcache php-xml php-mbstring php-bz2 php-zip php-xdebug
```
