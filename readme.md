## How to install Laravel project
- Clone your project eg. "git clone git@github.com:codinglabsau/bootcamp-2.git"
- Go to the folder application using cd command on your cmd or terminal
- Run "composer install" on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type "copy .env.example .env" if using command prompt Windows or "cp .env.example .env" if using terminal, Ubuntu or Mac.
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. 
- If database hasn't been created, you need to login to MySQL via terminal *mysql -u root -p*, where root is the MySQL user, then input your password, then just create the database using the *SQL CREATE DATABASE my_db*; where *my_db* is the database name and finally just update your .env file with your database and credentials.
- By default, the username is root and you can leave the password field empty. (This is for Xampp)
- By default, the username is root and password is also root. (This is for Lamp)
- Run "php artisan key:generate"
- Run "composer dump-autoload"
- Run "php artisan migrate:fresh" 
- Run "php artisan db:seed"
- Run "php artisan serve"
- Go to localhost:8000
