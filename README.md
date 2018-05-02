# Web-expenses-tracker
Track expenses

How to set-up on local:
1. git clone https://github.com/MeSans/Web-expenses-tracker
2. Open command line in the cloned folder:
  2.1 cmd> composer install
  2.2 cmd> copy .env.example .env
3. Open the .env file
change these lines:
DB_DATABASE = <whatever your database is called>
DB_USERNAME = <your username you used for the database>
DB_PASSWORD = <the password you went with for the db>

4. command prompt in the folder again:
  4.1 cmd>php artisan key:generate
  4.2 cmd>php artisan migrate 
  4.3 cmd> php artisan serve //just to test it out
  
 NOTES: if at 4.2 you get an saying something about mysql pdo, find your php.ini file and add the line:
 extension = php_pdo_mysql.dll
