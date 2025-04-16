# BHUB Project

BHUB is a PHP and MySQL web application built for managing books, user reviews, and book recommendations. This project is ideal for local development using XAMPP—a popular, easy-to-install package for running Apache, PHP, and MySQL on your computer.

## Overview

BHUB provides a complete workflow for a book recommendation platform where users can:
- **Register and Login:** Create an account and securely log in.
- **Browse Books:** View both purchasable and free (non-purchasable) books.
- **Purchase Books:** Complete a purchase process if the book is marked as purchasable.
- **Review Books:** Submit reviews for books, contributing to recommendations.
- **Filter Books:** Easily filter and search for books by different genres.

## Using XAMPP for Local Development

XAMPP is an all-in-one solution for setting up a local web server environment. To use XAMPP with the BHUB project:

1. **Download and Install XAMPP:**  
   Download XAMPP from the [official website](https://www.apachefriends.org/) and follow the installation instructions for your operating system.

2. **Place the Project Files:**  
   - Extract your project folder (e.g., the `bhub` folder) into the `htdocs` directory within your XAMPP installation directory.
   - Ensure that your main application file is named `index.php` to load automatically when you browse to `http://localhost/yourprojectfolder`.

3. **Start Apache and MySQL:**  
   Open the XAMPP Control Panel and start the Apache and MySQL services.  
   - Your PHP application will be accessible via a web browser at `http://localhost/yourprojectfolder`.

4. **Configure Your Database (Locally):**  
   - Use phpMyAdmin (accessed via `http://localhost/phpmyadmin`) to import your project’s database dump if necessary.
   - Ensure that your `connection.php` file is configured to point to your local MySQL credentials.

## User Workflow

The BHUB project includes the following key user workflows:

1. **User Registration:**  
   - Navigate to the **register.php** page.
   - Fill in your personal details (name, email, password, etc.) and submit the registration form.
   - An account is created, and you can then log in.

2. **User Login:**  
   - Go to **login.php**.
   - Enter your registered email and password.
   - On successful authentication, you’ll be redirected to the user dashboard.

3. **Browsing Books:**  
   - After logging in, users can view a list of available books on the homepage (or a dedicated books page).
   - Books are categorized as either purchasable or free.  
     - **Purchasable Books:** These include options for users to purchase the book.
     - **Non-Purchasable (Free) Books:** These are available at no cost.

4. **Purchasing Books:**  
   - When selecting a purchasable book, follow the on-screen instructions to complete the purchase (e.g., providing payment details).
   - If a book is free, simply click on the “Get for Free” button to access the content.

5. **Reviewing Books:**  
   - For each book recommendation, users can submit a review through the **review.php** page.
   - The review form allows users to rate the book and add comments.
   - Reviews help improve the recommendation engine and inform other users.

6. **Filtering by Genre:**  
   - Users can filter books by genre using the built-in filtering feature.
   - This allows quick navigation through various categories such as Fiction, Non-Fiction, Science, History, etc.
   - The filter options are available on the book listings page to help users find books that match their interests.

## License

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.


