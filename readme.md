# PHP Shop

An example of using the [Laravel framework](laravel.md) to create a fake book shop. Currently a work in progress for my CS 3620 course. Requires the Laravel framework and Artisan (and PHP/MySql of course).

## Instructions
This requires a .env file in the project root. The included file is set to look for a MySql database on `localhost` called `books_unlimited`. Change these settings as needed before running the migrations.  

The migrations can then be ran using the command 
```
php artisan migrate
```
This will create the tables in the database. You can then seed the database using 
```
php artisan db:seed
```
You can then run the server by using
```
php artisan serve
```

### To-do
* Editing a book doesn't bring up a books set genres (boxes are unchecked on the form.)
* Dynamically add genres on the create/edit book form.
* Navigate by genre (click on a genre, see all books in that genre).
