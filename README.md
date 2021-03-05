Online movie streaming is a web based application system developed using PHP and MySQL.
Users can search for different kinds of movie genres, users can view recently uploaded movies and most watched movies.

The web application is made up of 2 sections:
    Users section and an Admin section.
        
# Functionalities:
   - login system: create an account, delete account, update user details.
    - Watching Movies / Videos
    - recently updated/uploaded videos
    - most viewed videos
    - search functionality

* The admin role is assigned to the first user to create an account.
* Only the admin can upload movies/videos and images.

# Technologies used:
  Frontend:
       - HTML5
       - CSS
       - Bootstrap
  Backend:
	- PHP
	- MySQL (Database)

# Before use:
 - truncate all the tables after importing them from the sql-files folder & edit the database name in dbh.php
 - create a folder and name it "uploads" to store the uploaded images/posters of the movie/video.
 - create a folder and name it "video-uploads" to store uploaded videos of the corresponding image.
 - enter 1st row of the table manually and transfer videos and images to their respective folders.
 
# Installation :
- Setup
    * Download or Clone this repo (add repo url)
    * Download and Install XAMPP from "https://www.apachefriends.org/download.html"
    * Run the XAMPP control panel and start MYSQL and Apache
    * Go to C:\xampp\htdocs and extract the downloaded zip folder inside the 'htdocs' folder
    * Open your browser and go to "http//localhost/phpmyadmin/" to create the database
    * Click the new create a database
    * Name the database "onlinemovie"
    * Click import and select the sql file to import 'onlinemovie.sql' file located in the project folder
    * Click go
- Run
    - Open the browser and go to "http://localhost/onlinemovies"
    - Accessing Admin Account
        * Username: admin@email.com
        * Password: admin

# Screenshots :

