# Project Title

Assessment Task @PropertyBook.

## Prerequisites

- PHP >= 8.2
- Composer
- Laravel >= 11


## Installation Instructions

1. **Clone the repository:**

    ```bash
    git clone https://github.com/GladmanGeeDev/AssessmentTask
 
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Copy the example environment file and set the necessary environment variables:**

    ```bash
    cp .env.example .env
    ```

    Open `.env` and update the database credentials and other necessary configuration.

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database:**

    ```bash
    php artisan db:seed
    ```

## Running the Project

1. **Start the local development server:**

    ```bash
    php artisan serve
    ```

2. **Open the browser and navigate to:**

    ```text
    http://localhost:8000
    ```

## Accessing the Admin Page

1. **Navigate to the admin login page:**

    ```text
    http://localhost:8000/admin/login
    ```

2. **Use the following credentials to log in:**

    - **Email:** admin1@gmail.com
    - **Password:** 12345678

3. **After logging in, access the admin dashboard:**

    ```text
    http://localhost:8000/admin/dashboard
    ```



