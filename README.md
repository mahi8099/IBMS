1) Run below command in the cmd of root folder
    composer install
2) php artisan serve
3) In the browser type http://127.0.0.1:8000  
4) To work with queues we need to run below command in the cmd of root folder
    php artisan queue:table
    php artisan migrate
5) In .env file change to QUEUE_CONNECTION=database
6) To run the queues, run below command in the cmd of root folder
    php artisan queue:work
