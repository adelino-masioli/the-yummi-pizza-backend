## The Yummi Pizza Backend

### Description

Let’s say you want to start a new pizza delivery business. Please create a web application for
ordering pizza for your clients, which contains a shopping cart. Take the pizza order and the
delivery address and contact details for the client. Login is not required but could be available
for checking the history of orders.

### Requirements

```
PHP >= 7.2.5
BCMath PHP Extension
Ctype PHP Extension
Fileinfo PHP extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension
NodeJS
```

-   Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies.

-   I always recommend using [Laradock](https://laradock.io/), as it is faster and easier to create a Laravel environment.

# Installation

-   First make the application clone in an already configured environment. git clone https://github.com/alfjuniorbh/the-yummi-pizza-backend
-   After cloning the application, to rename the directory just execute the command: mv master the-yummi-pizza-backend
-   To access the application just type: cd the-yummi-pizza-backend
-   Some dependencies need to be installed, for this: composer install
-   Assets need to be compiled, so the commands: npm install so that all dependencies are satisfied
-   You will need to create a database and provide credentials by changing the .env file at the root of the project
-   The time has come for migrations: php artisan migrate
-   The first load of data is ready to be inserted into the system: php artisan db: seed
-   Ready, just upload the server with the command (if Docker / Laradock is not configured): php artisan serve
-   The default password: 123456
-   Enjoy

**Login**

-   Create a basic login page with the fields `email` and `password` on frontend

**Products**

-   List all products and relationship with stock and prices

**Orders**

-   Create order from frontend and associate to user who is creating on checkout.
-   List all orders by user after login.

# Below are some prints of the application pages

![Login Page](/public/images/1.png)
![Login Page](/public/images/2.png)
![Login Page](/public/images/3.png)
