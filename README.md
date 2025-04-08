# Laravel Learning 🚀

Welcome to the Laravel Learning repository! This project is dedicated to exploring the Laravel PHP framework — from basics to advanced concepts. Whether you're just getting started or looking to sharpen your Laravel skills, this repo is for you. Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling.

Clone this repository:
https://github.com/viratanil/learning-backend-laravel.git
cd laravel-learning

Install dependencies:
composer install
npm install
npm run dev

Copy .env file and generate application key:
cp .env.example .env
php artisan key:generate

Run database migrations:
php artisan migrate

Finally, serve the application:
php artisan serve

Project Structure:
/laravel-learning
├── app/               Application core (Models, Controllers)
├── bootstrap/         Application bootstrap
├── config/            Configuration files
├── database/          Migrations, seeders, factories
├── public/            Publicly accessible files
├── resources/         Views, raw assets (SASS, JS)
├── routes/            Route definitions
├── storage/           Compiled views, logs, file uploads
├── tests/             Automated tests
└── vendor/            Composer dependencies

Topics Covered:
- Laravel Installation & Setup
- Routing & Middleware
- Controllers & Request Lifecycle
- Blade Templating Engine
- Database Migrations & Eloquent ORM
- CRUD Operations
- Authentication & Authorization


Contributions are welcome! Fork this repo, create a new branch, make your changes, and open a pull request. Steps:
1. Fork the repository
2. Create a branch: git checkout -b feature-branch
3. Make changes and commit: git commit -m 'Add new feature'
4. Push to the branch: git push origin feature-branch
5. Submit a pull request

License: This project is open-source and available under the MIT License.

Connect with Me:
LinkedIn: [Virat Anil](https://www.linkedin.com/in/virat-anil)
Portfolio: [portfolio](https://virat-anil.vercel.app)

Happy coding! 🚀
