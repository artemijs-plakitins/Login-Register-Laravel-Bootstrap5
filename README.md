# Laravel Authentication with Bootstrap 5

## Project Overview

This is a simple web application built with **Laravel 9.x**, **PHP**, and **Bootstrap 5**. The application provides basic **authentication functionality**, including **user login** and **user registration**. The interface is styled using **Bootstrap 5** for a clean and responsive design.

## Features

- **User Registration**: Users can create a new account by providing their name, email, and password. Passwords are hashed before storing in the database.
- **User Login**: Registered users can log in using their email and password.
- **Password Validation**: Passwords must be at least 8 characters long and contain both letters and numbers.
- **Subscription**: The registration form includes an optional checkbox for users to subscribe to newsletters (with a default value of `true`).

## Prerequisites

- PHP 8.x or higher
- Composer
- Laravel 9.x
- SQLite (or any other database system of your choice)

## Installation

Follow these steps to get your development environment set up:

### Step 1: Clone the repository

```bash
git clone <your-repository-url>
cd <your-project-directory>
