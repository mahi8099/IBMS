1) Run below command in the cmd of root folder
    composer install
2) php artisan serve
3) In the browser type http://127.0.0.1:8000
4) To Import user: http://127.0.0.1:8000/import-users
5) To work with queues we need to run below command in the cmd of root folder
    php artisan queue:table
    php artisan migrate
6) In .env file change to QUEUE_CONNECTION=database
7) To run the queues, run below command in the cmd of root folder
    php artisan queue:work
