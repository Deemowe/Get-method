
# PHP MySQL Database
With PHP, you can connect to and manipulate databases.
MySQL is the most popular database system used with PHP.

# What is MySQL?
* MySQL is a database system used on the web
* MySQL is a database system that runs on a server

# How to connect HTML to database with MySQL using PHP? 
First of all, you must be install any XAMPP or WAMP or MAMP kind of software on your laptop or computer.
With this software, you will get a local webserver i.e. Apache, PHP language, and MySQL database.

For installation steps [Click here](https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/)

# Get vs Post method
Get| Post | 
--- | --- |
Data is collected by the predefined $_GET variable for processing|Data is collected by the predefined $_POST variable
We can not send large amount of data |Large amount of data can be sent 
GET method request can be saved as bookmark in browser|POST method request can not be saved as bookmark in browser
GET is less secure than POST because sent data is part of the URL| POST is a little safer than GET because the parameters are stored neither in the browser history nor in the web server logs

# Details
1. Google font 

you can use different font fimily using goolge and link them in **head** tag, and use specific font name in css file

  * HTML 
```html
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   ```


* CSS
```css
body{
  background-image: url(images/background.png);
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-position:left;
   background-size:contain;
   font-family: 'Quantico', sans-serif;
   }

   ```

# Problem & Solution
there is a little problem i face in the project, when i press submit buttun the browser send me to server -PHP- page that contains the sql codes,and i want it to be in the page that contains html codes!
if you face the same problem you can use this function in your php page of sql codes,and use the name of your main (i.e.indix) page.

```php
header("Location:indix.php");
```






