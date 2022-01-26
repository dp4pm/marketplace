# Marketplace

- [About](#about-dpg-marketplace)
- [Features](#features)
- [Requirements](#requirements)
- [Easy Installation](#easy-installation)
- [Server Setup](#server-setup)
    - [Ubuntu Server Setup](#update-os-dependency)
- [Install Project using Git](#install-project-using-git)

# About
A complete solution for E-commerce Business (Multi-vendor e-commerce platform) with exclusive features.


# Features
- [Merchant Features](docs//merchant/MerchantFeatures.md)
- [Admin Features](docs/admin/AdminFeature.md)
- [Marketing Features](docs/admin/MarketingFeature.md)
- [Product Features](docs/admin/ProductFeature.md)
- [Merchant Management](docs/admin/SellerFeature.md)


# Requirements
- Ubuntu Server
- PHP 7.4
- mysql
- Mariadb Server
- Laravel 8

## Easy Installation

## Server Setup

#### Update OS Dependency
```shell
sudo apt-get update
```

#### install apache server
```shell
sudo apt-get install apache2
```

#### checking your Apache configuration for syntax errors:
```shell
sudo apache2ctl configtest
```

### Install Db
```shell
sudo apt install mariadb-server
mysql_secure_installation
GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;
```

### PHP 7.4 Install
```shell
sudo apt -y install php7.4

sudo apt-get install -y php7.4-cli php7.4-json php7.4-common php7.4-mysql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath

sudo apt-get install php7.4-mysqli

sudo apt-get install php7.4-xml
```

### Restart Apache
```shell
sudo service apache2 restart
```

### Apache Config and  virtual hosts
```shell
    <Directory "/var/www/html">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
```

### copy the virtual config
```shell
vi [Your Domain Address].conf
```

```shell
    <VirtualHost *:80>
        ServerName [Your Domain Address]
        ServerAdmin webmaster@[Your Domain Address]
        DocumentRoot /var/www/html

        <Directory /var/www/html>
            AllowOverride All
        </Directory>

        ErrorLog /var/www/html/error.log
        CustomLog /var/www/html/access.log combined
    </VirtualHost>
```

```shell
sudo a2dissite 000-default.conf
sudo a2ensite [Your domain address]
sudo a2enmod rewrite
sudo systemctl restart apache2
```


## Install Project using Git

```shell
    git clone https://github.com/dp4pm/marketplace.git
    cp .env.example .env
    import database (find DB in database folder)
    composer update
    php artisan storage:link
    php artisan key:generate
    php artisan passport:install --force
```

### Default Users

#Login as an Admin
Username: admin@admin.com
Password: 123456

#Login as a Customer
Username: customer@example.com
Password: 123456

#Login as a Seller
Username: seller@example.com
Password: 123456
