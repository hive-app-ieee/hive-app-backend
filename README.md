# Hive App Backend Documentation

This repository contains the backend API for the Hive Android application. It is structured using a domain-oriented design pattern to maintain clean code separation and scalability. The project uses Laravel for the backend API with separate modules for each domain, including features like booking, workspace management, and user authentication.

## Project Structure

The folder structure has been divided into two main sections:

- **API**: This is the core API folder which contains all the necessary files for the API, including controllers, routes, services, and other supporting files.
- **app**: This folder contains the domain models and other classes related to the internal business logic.

### API Folder Breakdown

```plaintext
API
├── src
│   ├── Actions
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Data
│   │   │   └── Domain
│   │   │       ├── Auth
│   │   │       │   └── AuthController.php
│   │   │       ├── Booking
│   │   │       │   └── BookingController.php
│   │   │       ├── Recommendation
│   │   │       │   └── RecommendationController.php
│   │   │       └── Workspace
│   │   │           └── WorkspaceController.php
│   │   ├── Services
│   │   │   └── APIController.php
│   ├── Middlewares
│   ├── Requests
│   ├── routes
│   │   ├── domains
│   │   │   ├── auth.routes.php
│   │   │   ├── booking.routes.php
│   │   │   ├── workspace.routes.php
│   │   │   ├── actions.routes.php
│   │   │   └── api_router.php
│   └── Support
```

This folder contains all logic related to the API that will be consumed by the Android application. It includes:

- **Actions**: Stores logic related to API actions, like specific services or handlers.
- **Http**:
  - **Controllers**:
    - **Data**: Handles the controllers for manipulating domain-specific data.
    - **Domain**: Contains controllers for each domain in the app:
      - `AuthController`: Handles user authentication.
      - `BookingController`: Handles booking processes.
      - `RecommendationController`: Manages recommendation logic.
      - `WorkspaceController`: Manages workspace-related operations.
  - **Services**: Houses reusable services like `APIController`, which might handle common functionalities across the API.
  - **Middlewares**: Custom middlewares for the API.
  - **Requests**: Handles form request validation for the API.
- **routes/domains**: Contains routes for each domain:
  - `auth.routes.php`: Routes for authentication.
  - `booking.routes.php`: Routes for booking.
  - `workspace.routes.php`: Routes for workspace management.
  - `actions.routes.php`: General actions routes.
  - `api_router.php`: Main routing file to handle all domain-specific routing.
- **Support**: Contains utility or helper functions.

### App Folder Breakdown

```plaintext
app
├── Domain
│   ├── Booking
│   │   └── Models
│   │       ├── Booking.php
│   │       └── BookingAttendance.php
│   ├── Management
│   │   └── Models
│   │       ├── City.php
│   │       ├── Governorate.php
│   │       ├── Location.php
│   │       └── User.php
│   ├── Recommendation
│   │   └── Models
│   │       ├── Preference.php
│   │       └── Review.php
│   └── Workspace
│       └── Models
│           ├── Room.php
│           └── Workspace.php
├── Http
│   └── Controllers
```

This folder contains the core business logic of the application. It includes the domain models, controllers, and services specific to the business logic.

- **Domain**:
  - **Booking**:
    - `Booking.php`: The booking model that contains business rules for bookings.
    - `BookingAttendance.php`: Model for tracking attendance within a booking.
  - **Management**:
    - Models for managing cities, governorates, locations, and users.
    - `City.php`, `Governorate.php`, `Location.php`, `User.php`.
  - **Recommendation**: Handles recommendation-related logic with `Preference.php` and `Review.php`.
  - **Workspace**: Manages the workspace data:
    - `Room.php`: Handles room-specific data.
    - `Workspace.php`: Main workspace model.
- **Http**: This folder contains HTTP-related logic for non-API operations in the app.

### Key Packages

- **Laravel Permissions**: To handle user roles and permissions across different modules.
- **Laravel Medialibrary**: For managing media uploads and attachments within the workspace and booking domains.

## Domain-Oriented Design

This project follows a domain-oriented structure where each domain encapsulates its own models, controllers, and business logic. Each domain is self-contained to ensure that changes in one domain do not affect others, making it easier to manage and scale the project.

## API Documentation

- **Booking**: All endpoints related to the workspace booking feature.
- **Workspace**: Manage workspaces and rooms.
- **Authentication**: Includes login, registration, and authorization logic.

For more detailed API documentation, refer to the `routes/domains` folder for available endpoints.

## Getting Started

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/hive-app-ieee/hive-app-backend.git
   ```
2. Install dependencies:
    ```bash
    composer install
    ```
3. dump autoload:
    ```bash
    composer dump-autoload
    ```
4. Setup environment variables:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. Run Migrations:
    ```bash
    php artisan migrate
    ```
6. Run The application:
    ```bash
    php artisan serve
    ```
