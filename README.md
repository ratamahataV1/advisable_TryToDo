![310553524_525906182873797_838120229663963187_n](https://github.com/ratamahataV1/advisable_TryToDo/assets/11263014/4f191a17-a994-4926-820a-e7a598b3777c)<br>

TryToDo WebApp(fullStack)<br>

Application Overview<br>
The application is a user management system that includes features for user registration,<br> 
login, profile management, and admin functionalities for managing users and their messages.<br> 
It is built using the CodeIgniter framework, following the MVC (Model-View-Controller) architecture<br> 
to separate concerns, making the codebase modular, maintainable, and scalable.<br>

![promo](https://github.com/ratamahataV1/advisable_TryToDo/assets/11263014/17ec1fd3-82b0-437d-bacf-08a1beb3c931)<br>

-Stack<br>
codeigniter v.3<br>
PHP v7.4.33<br>
phpMyAdmin v5.2.0<br>
Composer v2.7.7<br>
MariaDB v10.4.27<br>
Apache/2.4.54<br>
Dbclient libmysql - mysqlnd v7.4.33<br>
tailwindcss v2.2.19<br>
jQuery v3.6.0<br>


# Application Setup

## Prerequisites

1. [**XAMPP**](https://www.apachefriends.org/index.html): Ensure XAMPP is installed on your machine.
2. [**Composer**](https://getcomposer.org/): Ensure Composer is installed on your machine.
3. [**MailHog**](https://github.com/mailhog/MailHog): For email [testing](https://github.com/ratamahataV1/advisable_TryToDo/blob/main/application/config/email.php) (optional)

### Linux

1. **Clone the Repository**:
    ```
    git clone https://github.com/ratamahataV1/advisable_TryToDo.git
    ```
2. **Move the Application to htdocs directory of your XAMPP installation**:
   
		sudo mv advisable_TryToDo-main /opt/lampp/htdocs/tryToDo
   

4. **Navigate to the Application Directory**:
    ```
    cd /opt/lampp/htdocs/tryToDo
    ```

5. **Install Dependencies**:
    ```
    composer install
    ```
4. **Start XAMPP**:
   ```
   sudo /opt/lampp/lampp start
 	```
6. **Set Up the Database**:
    - Open phpMyAdmin from XAMPP (usually available at `http://localhost/phpmyadmin`).
    - Create a new database (e.g., `tryToDo`).
    - Import the database backup file (`tryToDo_quickEX.sql`) into the newly created database.

7. **Configure the Application**:
    - Update the database configuration in `application/config/database.php`:
      ```php
      $db['default'] = array(
          'dsn'   => '',
          'hostname' => 'localhost',
          'username' => 'root',  // Default XAMPP user
          'password' => '',      // Default XAMPP password is empty
          'database' => 'tryToDo',
          'dbdriver' => 'mysqli',
          // other settings...
      );
      ```

    - Update the base URL in `application/config/config.php`:
      ```php
      $config['base_url'] = 'http://localhost/tryToDo/';
      ```

8. **Run the Application**:
    - Open a browser and navigate to:
      ```
      http://localhost/tryToDo/
      ```

## Troubleshooting

- Ensure XAMPP and Composer are correctly installed and configured.
- Check the database credentials (see the [docs](https://github.com/ratamahataV1/advisable_TryToDo/blob/main/doc.pdf)) and ensure the database is correctly imported.
- If there are permission issues on Linux, ensure the application directory has the correct permissions:
  ```
  sudo chown -R $USER:www-data /opt/lampp/htdocs/tryToDo
  sudo chmod -R 775 /opt/lampp/htdocs/tryToDo
