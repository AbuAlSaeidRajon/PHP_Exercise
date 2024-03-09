# Booksite Project


## Introduction

This project is a small book site that demonstrates the use of various PHP functionalities such as conditionals, loops, form input, sessions, cookies, and file handling. The site allows visitors to view books by genre and favorite or unfavorite books. An optional admin side allows for the addition and deletion of books.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP 7.4 or higher
- A web server (like Apache or Nginx)
- A web browser

### Installing

1. Clone the repository to your local machine:

   ```bash
   git clone 
   ```

2. Navigate to the project directory.
3. Start your web server and navigate to the file directory in your web browser.

   ```bash
   php -S localhost:8080
   ```

   Urls:

   ```bash
   - normal user:
   http://localhost:8080/booksite.php

   - admin user:
   http://localhost:8080/login.php
   http://localhost:8080/admin.php
   ```

## Project Structure

- `README.md`: This file, which provides an overview of the project.
- `addbook.php`: This file is used to add a new book or edit an existing book. It checks if a 'bookid' is set in the GET request and uses it to fetch the details of the existing book. These details are then pre-filled in the form fields. If the form is submitted, it checks if the book is being edited and updates the existing book in the books.json file. If the book is not being edited, it adds a new book to the file.
- `admin.php`: This file provides the admin interface for adding, editing, and deleting books.
- `books.csv` and `books.json`: These files store the book data. You can choose to use either format. If you plan to implement the admin side, it's recommended to use the JSON format as it makes deleting a book easier.
- `booksite.css`: This file contains the CSS styles for the site.
- `booksite.php`: This file handles the visitor side of the site. It reads the book data from the chosen file and displays the books of the corresponding genre on each genre page. It also handles the favoriting and unfavoriting of books.
- `deletebook.php`: This file is used to delete a book. It checks if a 'bookid' is set in the GET request and uses it to delete the corresponding book from the books.json file.
- `login.php`: This file handles the login functionality for the admin side.
- `setfavorite.php`: This file handles the functionality for favoriting and unfavoriting books. It saves the favorite list as a cookie on the visitor's device and reads it on the server to display the correct symbol for each book.

## Visitor Side

The visitor side of the site reads the book data from the chosen file and displays the books of the corresponding genre on each genre page. Visitors can favorite or unfavorite books by clicking on the star symbol next to each book. The favorite list is saved as a cookie on the visitor's device and read on the server to display the correct symbol for each book.

## Admin Side

The admin side of the site allows for adding, editing and deleting books. All changes to the books are saved in the data json file.

## Reference

The initial completion of this project can be found at my [GitHub repository](https://github.com/AbuAlSaeidRajon/PHP_Exercise/tree/main/Booksite_Project).

The original project, created by Damien Kuosmanen, is available [here](https://github.com/jiivonen/PHP-booksite).