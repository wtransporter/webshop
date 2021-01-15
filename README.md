## WebShop

WebShop is application that connects to a web service and synhronize relevant data.</br>
(WebService repository is excluded.)

- Login / Register
- Load data from Web Service
- Create order
- Send notification for created order
- Create products
- View order history (order details)

## Setup

1. Download / clone project. Navigate to project folder.</br>
2. Install composer dependencies using following command:</br>
    <pre>composer install</pre>
3. Instal node dependencies using following command:</br>
    <pre>npm install</pre>
    <pre>npm run dev</pre>
4. Create .env file (copy from .env.example).</br>
    Generate app key:
    <pre>php artisan key:generate</pre>
5. Create empty DB and set up .env file with database information.</br>
6. Run migrations</br>
    <pre>php artisan migrate</pre>
7. Seed database to insert test products and users</br>
    <pre>php artisan db:seed</pre>