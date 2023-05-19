<p align="center"><img src="/public/img/logo.png" width="300"></p>

# AK-Hotel - Portfolio Hotel Project

<screenshot>

AK-Hotel is a portfolio hotel management project developed in Laravel framework, showcasing a hotel website. It utilizes Bootstrap 5, DataTables, and Laravel Gates to provide an interactive and user-friendly experience.

## Screenshots

<homepage>
Homepage showcasing the hotel's accommodations.

<booking>
Booking page allowing users to select dates and make reservations.

<rooms>
Room listings with detailed information and availability.

<guests>

<admin panel>

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
cd AK-Hotel
cd src
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
