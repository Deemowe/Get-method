
# PHP MySQL Database
With PHP, you can connect to and manipulate databases, and MySQL is the most popular database system used with PHP.

# What is MySQL?
* MySQL is a database system used on the web
* MySQL is a database system that runs on a server

# How to connect HTML to database with MySQL using PHP? 
First of all, you must be install any XAMPP or WAMP or MAMP kind of software on your laptop or computer.
With this software, you will get a local webserver i.e. Apache, PHP language, and MySQL database.

* [installation steps](https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/)
* [MYSQL example](https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/)

# Get vs Post methods
There are two methods to collect and send information to the MYSQL database. In this code, we use the **Get method** when collecting information.

The difference between the Get and Post methods:
Get| Post | 
--- | --- |
Data is collected by the predefined $_GET variable for processing|Data is collected by the predefined $_POST variable
We can not send large amount of data |Large amount of data can be sent |
GET method request can be saved as bookmark in browser|POST method request can not be saved as bookmark in browser|
GET is less secure than POST because sent data is part of the URL| POST is a little safer than GET because the parameters are stored neither in the browser history nor in the web server logs|

# Details
* Google font 

You can use different fonts with goolge and link them in the **head** tag, and use the name of each font in the css file.

  <details>
 <summary>HTML</summary> 
 </details>
  
```html
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   ```

<details>
 <summary>CSS</summary>
 </details>
 
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
 There is a small problem I have in the project. When I press submit buttun, the browser sends me to the server -PHP- page that contains the sql codes and I want it to be on the page that contains the HTML codes!
 
If you face the same problem, you can use this function in your PHP page with the sql codes and use the name of your main page (i.e. indix).

[Watch the video](https://youtu.be/htLrSDadppQ)

```php
header("Location:indix.php");
```

## Preview 
Watch the video:
[![Watch the video](https://img.youtube.com/vi/i2pNg-3Swiw/maxresdefault.jpg)](https://youtu.be/i2pNg-3Swiw)
