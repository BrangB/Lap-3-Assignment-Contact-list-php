# Setting Up Local MySQL Database with XAMPP

## Introduction

This guide explains how to set up a local MySQL database using XAMPP for your project.

## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your system.

## Steps to Set Up Local MySQL Database

### 1. Start XAMPP and MySQL

1. Start XAMPP and ensure MySQL is running.
   - Open XAMPP Control Panel.
   - Start the MySQL service if it's not already running.

### 2. Access phpMyAdmin

1. Open a web browser and go to `http://localhost/phpmyadmin`.
2. Log in with the default credentials (usually username: `root`, password: empty).

### 3. Create Database

1. Click on the "New" button on the left sidebar to create a new database.
2. Enter `lap3_contact` as the database name and click "Create".

### 4. Create Table

1. Select the newly created `lap3_contact` database from the left sidebar.
2. Click on the "SQL" tab in the top menu.
3. Paste the following SQL query into the text area and click "Go" to create the `contacts` table:
   ```sql
   CREATE TABLE contacts (
       id INT(11) NOT NULL AUTO_INCREMENT,
       name VARCHAR(100) NOT NULL,
       phone VARCHAR(20) NOT NULL,
       email VARCHAR(100) NOT NULL,
       address TEXT NOT NULL,
       PRIMARY KEY (id)
   );
