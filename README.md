# Voice of Maranatha - Laravel Project

This is a web application for **Voice of Maranatha** built using **Laravel 10**. The project includes both a user-facing landing page and an admin panel for content management.

## Features

### User (Landing Page)
The public landing page includes the following features:
- **About Us**: Describes the organization.
- **Visi Misi**: The vision and mission of the organization, displayed automatically with numbered points.
- **History**: Information about the organization's history in a 5W + 1H format.
- **Divisi**: A section showing the organization's divisions in clickable cards with details.
- **News**: Display related news with a similar format to the divisions section.
- **Gallery**: A collection of photos from the organization's activities.

### Admin Panel (CMS)
The **Admin Panel** is a private section only accessible via `/admin` URL and allows the admin to:
- Manage content for the user-facing landing page (About Us, Visi Misi, History, Divisi, News, and Gallery).
- Upload images to different sections (Divisi, News, Gallery).

### Features for Admin:
- Image upload system using Laravel's `storage:link`.
- Admin authentication using Laravel's built-in `users` table.

## Installation

Follow the steps below to set up the project locally:

### Prerequisites

Ensure you have the following installed:
- PHP >= 8.2
- Composer
- MySQL or any compatible database
- Laravel 10

### Steps to Install

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/voice-of-maranatha.git
    cd voice-of-maranatha
    ```

2. Install the dependencies:
    ```bash
    composer install
    ```

3. Set up your `.env` file by copying `.env.example`:
    ```bash
    cp .env.example .env
    ```

4. Set the database connection settings in the `.env` file.

5. Generate the application key:
    ```bash
    php artisan key:generate
    ```

6. Run the database migrations:
    ```bash
    php artisan migrate
    ```

7. Link storage to public:
    ```bash
    php artisan storage:link
    ```

8. Set file permissions for the `storage` directory:
    ```bash
    sudo chmod -R 775 storage
    ```

9. Run the application:
    ```bash
    php artisan serve
    ```

The application will be available at `http://localhost:8000`.

## Admin Login

- Access the admin panel via `/admin`.
- Use Laravel's default authentication system with the `users` table.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
