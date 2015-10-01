Example Magento 2 module for custom controllers demonstration.

<h2>Install:</h2>
First add repository to composer configuration:
```bash
composer config repositories.inchoocustomcontroller vcs git@github.com:zoransalamun/magento2-custom-controllers.git
```
Require new package with composer:
```bash
composer require inchoo/custom-controllers:dev-master
```
Enable Inchoo CustomControllers module
```bash
php bin/magento module:enable Inchoo_CustomControllers
```

Flush everything:
```bash
php bin/magento setup:upgrade
```
