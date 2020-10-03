# php-sandbox
Sandbox for PHP apps

## Install steps

```bash
//PHP and composer
sudo apt install php-cli php-xml php-curl composer
composer install

//Phive
wget -O phive.phar "https://phar.io/releases/phive.phar"
chmod +x phive.phar
sudo mv phive.phar /usr/local/bin/phive

//Phpunit executable
phive install phpunit
```