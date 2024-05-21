# Student Database Management Web Application

![image](https://github.com/dwaj-dev/student-database-managment/assets/96294882/2ba996e4-2d4c-4ab9-9d58-6399e41f9592)


This web application streamlines the management of student records, allowing administrators to easily add, search, update, and analyze student data. It's built using HTML, CSS, JavaScript, PHP, and MySQL, providing a user-friendly interface for efficient data handling.

## Key Features

* **Secure Login:**  Administrators access the system through a secure login page to protect sensitive student information.
* **Student Registration:** Easily add new student records with details like name, ID, email, contact information, department, photo, and more.

![image](https://github.com/dwaj-dev/student-database-managment/assets/96294882/0bce1417-f1b5-4566-a74e-5c6f3bc7e4a7)


* **Search Functionality:** Quickly find student records using search filters based on various criteria (e.g., student ID).
* **Data Update:** Update existing student information as needed, ensuring records are always accurate and up-to-date.
* **Statistics and Reporting:** Visualize and analyze student data through insightful graphs and statistics (e.g., students per department, distribution by state).

![image](https://github.com/dwaj-dev/student-database-managment/assets/96294882/0e849328-703b-45f5-b844-4e1e2618f16e)
![image](https://github.com/dwaj-dev/student-database-managment/assets/96294882/442d9580-0f9d-46ca-ab07-411ab657022d)



## Installation and Setup

1. **Prerequisites:**
   - Web server (e.g., Apache)
   - PHP (version 7.x or later)
   - MySQL database

2. **Download:** Clone or download the project files from the repository.

3. **Database Configuration:**
   - Create a MySQL database named `student_db` (or modify `config.php` if you use a different name).
   - Run the SQL queries from the `database_setup.sql` file (included in the project) to create the necessary tables.
   - Update database connection settings in `config.php`:
     ```php
     $servername = "your_servername"; // Usually 'localhost' for local setup
     $username = "your_username";
     $password = "your_password";
     $dbname = "student_db";
     ```

4. **Image Storage:**
   - Ensure the `images` and `uploads` folders exist in your project directory and have write permissions for the web server.

## How to Use

1. **Login:** Access the web application in your browser and log in using your admin credentials.
2. **Registration:** fill the registration form with required details and upload a student photo.
3. **Search:** Use the search bar to find students by Student ID.
4. **Update:**  Click on update to view and edit their details.
5. **Statistics:** Navigate to the "Statistics" section to view graphs.

## File Structure

- `index.php`: Login page.
- `registration.php`: Student registration form.
- `register.php`: Handles registration form submission.
- `usersearch.php`: Student search functionality.
- `update.php`:  Student data update page.
- `statistics.php`:  Statistics and reporting page.
- `logout.php`:  Logs the user out.
- `images/`: Folder for storing icons and images.
- `uploads/`: Folder for storing student photos.



## Security Considerations

- **Password Hashing:** The project uses password hashing to protect user credentials.
- **Input Validation:**  Always sanitize user input to prevent SQL injection and cross-site scripting (XSS) attacks.
