# JajanSnack
Project Laravel untuk tugas Secure Programming

## Installation

From your command line, clone and run beans:
```bash
# Clone this repository inside the folder "xampp/htdocs/" (without quotation marks).
$ git clone https://github.com/ArjunaAcchaDipa/beans.git

# Change directory using your terminal or cmd.
$ cd beans/

# Install composer
$ composer install

# Copy the example env file and make the required configuration changes in the .env file.
$ cp .env.example .env

# Generate a new application key.
$ php artisan key:generate

# Import database from beans.sql file to "localhost/phpmyadmin" (without quotation marks).
# Click import from "localhost/phpmyadmin" and choose beans.sql

# Run "php artisan serve".
$ php artisan serve
```