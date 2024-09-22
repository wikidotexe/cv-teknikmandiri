
![image](https://github.com/user-attachments/assets/6017d36d-e25f-4c1b-a4fa-dbadc236f348)


# Landing Page / Company Profile Website

**Praktikum Semester 6 - Pemrograman Visual**  
This project is a company profile website, developed as part of the 6th-semester practical work for Visual Programming. The primary purpose of this website is to showcase a business or organization's information through a professionally designed landing page.

## Features

- **Responsive Design**  
  The website is built using responsive techniques, ensuring compatibility across devices such as desktops, tablets, and smartphones.

- **Contact Form with SQL Integration**  
  The contact form is connected to a SQL database (`contact_form.sql`), which securely stores the user input for future processing. The form allows businesses to capture customer queries and feedback.

- **Interactive JavaScript Components**  
  Includes smooth animations (`animation.js`) and a dynamic slideshow (`slideshow.js`) for a modern, interactive user experience.

- **Form Validation**  
  User inputs are validated through custom JavaScript functions (`validation.js`), ensuring clean and correct data submission.

- **PHP-Driven Backend**  
  The website is powered by PHP for server-side processing, with key components such as:
  - `connection.php`: Manages database connectivity.
  - `laporan.php`: Used for generating or displaying reports from the website’s database.

- **Email Integration with PHPMailer**  
  PHPMailer is used to send automated emails from the contact form, providing immediate feedback to users who fill out the form.

## Folder Structure

- **PHPmailer/**: Contains the necessary libraries for email integration.
- **css/**: Stylesheets that define the look and feel of the website.
- **image/**: Images used across the website for branding and aesthetic purposes.

## Prerequisites

- **Server Requirements**  
  The project requires a server with PHP and MySQL or MariaDB installed for database and backend functionality.
  
- **Database Setup**  
  Import the `contact_form.sql` file to set up the required database structure for capturing contact form submissions.

## How to Run

1. Clone the repository to your local server or hosting platform.
2. Ensure your server meets the required prerequisites (PHP, MySQL).
3. Set up the database by importing `contact_form.sql`.
4. Edit the `connection.php` file to reflect your server’s database credentials.
5. Launch the website and test the contact form and other features.

## Credits

Developed by [wikiarlianm](https://github.com/wikiarlianm) as part of **Pemograman web lanjut - Semester 6** practical coursework.
