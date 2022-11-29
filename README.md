1) Run below command in the cmd of root folder
    composer install

2) To work with queues we need to run below command in the cmd of root folder
    php artisan queue:table
    php artisan migrate

3) In .env file change to QUEUE_CONNECTION=database

4) To run the queues, run below command in the cmd of root folder
    php artisan queue:work
