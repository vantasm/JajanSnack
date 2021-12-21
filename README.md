# JajanSnack

Project Laravel untuk tugas Secure Programming

## Installation

From your command line, clone and run beans:
```bash
# Clone this repository inside the folder "xampp/htdocs/" (without quotation marks).
$ git clone https://github.com/vantasm/JajanSnack.git

# Change directory using your terminal or cmd.
$ cd JajanSnack/

# Install composer
$ composer install
# If the composer version is different, try using this one
$ composer install --ignore-platform-reqs

# Copy the example env file and make the required configuration changes in the .env file.
$ cp .env.example .env

# Generate a new application key.
$ php artisan key:generate

# Import database from jajanSnack.sql file to "localhost/phpmyadmin" (without quotation marks).
# Click import from "localhost/phpmyadmin" and choose jajanSnack.sql

# Run "php artisan serve".
$ php artisan serve
```
