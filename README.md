# laravel61Demo

#Init
 #copy for .env file
 - cp .env.example .env
 #install vender
 - composer install
 #set app key
 - php artisan key:generate
 #change for your db 
 - Set .env file DB setting
 #migrate db table
 - php artisan migrate
 #Seed Testing data
 - php artisan db:seed

#Set Up
 - php artisan serve (defaule at 127.0.0.1:8000)

#Use
 - http://127.0.0.1:8000/ (will see welcome)
 - http://127.0.0.1:8000/sayHello (will see Hello User)
