 git clone  "paste project URL"
 
 cd eCommerce-Laravel
 
 cp .env.example .env
 
 //open your project env folder then change database name
 
 cmd: composer install
 
cmd: php artisan key:generate

cmd: php aartisan migrate:fresh --seed

cmd: php artisan serve
