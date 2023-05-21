<p align="center"><img src="/src/public/img/logo.png" width="300"></p>

# AK-Hotel - Portfolio Hotel Project

<screenshot>

AK-Hotel is a portfolio hotel management project developed in the Laravel framework. It serves as a showcase website for a hotel, providing various features and functionalities. This README aims to provide an extensive guide on the project, including its architecture, installation, and usage.

## Features:

API: The AK-Hotel project offers a comprehensive API that allows developers to interact with various aspects of the hotel management system. The API provides endpoints for managing bookings, rooms, guests, and other essential hotel operations. Developers can integrate this API into their own applications or extend its functionality to suit their specific needs.

Bootstrap 5: The project utilizes Bootstrap 5, a popular CSS framework, to ensure a responsive and visually appealing design across different devices and screen sizes. This enables the website to provide an optimal user experience on desktops, tablets, and mobile devices.

DataTables: AK-Hotel integrates DataTables, a powerful JavaScript library, to enhance the data presentation and manipulation capabilities of tables in the project. DataTables provides features such as pagination, sorting, filtering, and searching, making it easier for users to navigate and interact with hotel-related data.

Laravel Gates: The project leverages Laravel Gates, a built-in authorization system, to manage user permissions and access control. With Laravel Gates, you can define and enforce access policies based on user roles and permissions, ensuring that only authorized users can perform specific actions within the system.

## Screenshots

homepage pic
Homepage showcasing the hotel's accommodations.

bookings pic
Booking page allowing users to select dates and make reservations.

rooms pic
Room listings with detailed information and availability.

guests pic
...

admin panel pic
...

## Dependencies 

```bash
cd src

# Run the following command to install the PHP dependencies using Composer:
composer install

# To install the JavaScript dependencies using NPM, execute the following command:
npm install
```

## Getting Started

To get started with the AK-Hotel project, follow the steps below:

1. Clone the repository:
```bash
git clone https://github.com/pr0sp3ro/AK-Hotel.git
```

2. Navigate to the project directory:
```bash
cd AK-Hotel/src
```

3. Install PHP dependencies:
```bash
composer install
```

4. Install JavaScript dependencies:
```bash
npm install
```

5. Configure the environment variables:

Copy the .env.example file and rename it to .env.
Update the necessary configuration variables, such as the database connection details.

```bash
cp .env.example .env
```

6. Generate a new application key:
```bash
php artisan key:generate
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Start the development server:
```bash
php artisan serve
```

9. Visit http://localhost:8000 in your web browser to access the AK-Hotel application.

## Contributing

If you'd like to contribute to the project, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes with descriptive messages.
4. Push your changes to your fork.
5. Submit a pull request to the main repository.

## License

The AK-Hotel project is open-source software licensed under the MIT license. Feel free to use, modify, and distribute the code as per the terms of the license.
