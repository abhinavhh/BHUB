# BHUB Project

Welcome to the BHUB project! This is a PHP and MySQL–based web application that provides features such as user registration, login, chat, book listings, payments, and administrative functionality. The project includes multiple modules (admin, author, books, chat, payments, registration, etc.) and a pre-built database schema.

## Site is Live Here [Redirect to bhub](https://bhub.fwh.is/ "redirect to bhub").
## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
  - [Prerequisites](#prerequisites)
  - [File Structure](#file-structure)
  - [Database Setup](#database-setup)
  - [Configuration](#configuration)
- [Deployment](#deployment)
- [Support](#support)
- [License](#license)

## Overview

BHUB is a modular PHP web application with the following components:
- **User Management:** Registration, login, password reset, and user profile.
- **Chat Module:** Real-time chat functionality.
- **Book Listings:** Display, review, and purchase books.
- **Payments Module:** Process payment information and view payment histories.
- **Admin Dashboard:** Back-end management (dashboard, reports, and user monitoring).

The project uses a MySQL database for storing application data. The database schema is included in the `bhub.sql` file.

## Features

- **Modular Design:** Separate modules for admin, chat, books, payments, registration, and more.
- **Responsive Design:** Layouts and templates that work on desktop and mobile.
- **File-Based Templating:** Includes header, footer, and common files for consistent look and feel.
- **Database Driven:** MySQL is used to store all application data.
- **Free Hosting Ready:** Designed to run on free hosting solutions like InfinityFree.

## Installation

### Prerequisites

Before deploying the project, ensure you have:
- A PHP-enabled web server (InfinityFree provides free hosting with PHP support).
- MySQL database support.
- An FTP client (e.g., FileZilla) or access to the InfinityFree file manager.
- phpMyAdmin access to import the database.

### File Structure

After extracting the ZIP file, your project structure should look similar to:


### Database Setup

1. **Create a MySQL Database:**
   - Log in to your InfinityFree control panel.
   - Navigate to the “MySQL Databases” section.
   - Create a new database (e.g., `if0_38761672_bhub`).
   - Note down your Database Host (e.g., `sql102.infinityfree.com`), Database Name, Username, and Password.

2. **Import the Database Dump:**
   - Open **phpMyAdmin** from the InfinityFree control panel.
   - Select the database you just created.
   - Click on the **Import** tab.
   - Choose the `bhub.sql` file from your local machine.
   - Click **Go** to execute the import. You should see a success message, and the tables will appear under the database.

### Configuration

1. **Database Connection:**
   - Open the `connection.php` file in your project’s root.
   - Update the MySQL credentials to match your InfinityFree configuration. For example:
     ```php
     <?php
     $con = mysqli_connect(
         'sql102.infinityfree.com',   // MySQL Host (check your InfinityFree details)
         'if0_38761672',              // Your Database Username (provided by InfinityFree)
         'your_password_here',        // Your Database Password
         'if0_38761672_bhub'          // Your Database Name
     );
     if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
     }
     ?>
     ```
2. **Other Configuration Files:**
   - Ensure that your configuration files (e.g., `.htaccess` or any environment-specific settings) are updated to reflect the production settings, such as domain name and file paths.

## Deployment

1. **Upload Your Project Files:**
   - Use an FTP client (e.g., FileZilla) or the InfinityFree File Manager to upload all files inside the `bhub/` folder to the `htdocs` directory on your InfinityFree account.
   - Ensure that the main file `index.php` is in the root of `htdocs`.

2. **Verify the Website:**
   - Visit your free domain (e.g., `https://bhub.fwh.is/`) to ensure your PHP application loads.
   - Test key functionalities (e.g., user registration, login, chat, book listings) to confirm everything is working.

## Post-Deployment Checklist

Now that your site is live, here are some additional tips to ensure a smooth and secure experience:

- **Mobile Compatibility & HTTPS:**
  - Verify that your site is accessible on mobile devices. If browsers show “Not Secure,” ensure your SSL certificate is correctly installed.
  - If needed, set up an `.htaccess` redirect to force HTTPS:
    ```apache
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
    ```

- **Performance Optimization:**
  - Consider caching and minifying your CSS and JavaScript files.
  - Optimize images and enable compression on your web server if possible.

- **Backup & Monitoring:**
  - Regularly back up your database using phpMyAdmin’s export feature.
  - Keep a local copy of your project files.
  - Use free online services to monitor your site’s uptime and performance if available.

## Support

If you encounter any issues:
- Refer to InfinityFree’s documentation and forums.
- Check error logs via the control panel to help diagnose problems.
- Open an issue on the project’s repository with detailed information.

## License

This project is licensed under the MIT License. (Feel free to replace with your preferred license.)

---

*Happy coding and deploying!*


This project is licensed under the MIT License (or include your preferred license here).

---

*Happy coding and deployment!*

