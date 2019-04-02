# Login
Simple login page with pure PHP.

## Installation
***Requisites:***
 - Mysql
 - PHP

***Installation:***
 1. Paste the files into the web folder you want to protect with a login
    page. In the source is provided an example index.php for reference.
 2. Create a new table called Users in your database, with columns like this:


    | id  | username | password             |
    |-----|----------|----------------------|
    | int | varchar  | varchar (size >= 64) |


 3. Change the file `db_conn_settings.json` with the credentials of your Mysql server.
 4. Each page that wants to check if the user is  logged in has to have `checkLogin.php` imported.
 5. Use `register.php` as a form action to register new users.
