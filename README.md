download or clone project
Go to the folder application using cd
Run composer install on your cmd or terminal
create database
Copy .env.example file to .env on root folder. 
    You can type copy .env.example .env if using command prompt Windows 
     or cp .env.example .env if using terminal Ubuntu
Open your .env file and change the database name (DB_DATABASE)
Run php artisan key:generate
Run php artisan migrate
Run php artisan serve