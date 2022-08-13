how to access : 
1. php artisan migrate
2. php artisan db:seed --class=UserTableSeeder
3. open request.rest to see how to request

4. php artisan migrate:fresh --seed


You may also seed your database using the migrate:fresh command in combination with the --seed option, 
which will drop all tables and re-run all of your migrations. 
This command is useful for completely re-building your database