## Laravel 8 Multi-Authentication System
Role based Authentication System using [Laravel Breeze & Inertia with vue scaffolding](https://laravel.com/docs/8.x/starter-kits#breeze-and-inertia).
### Installation
- clone the repository:
```
git clone https://github.com/Kamrul-Haque/laravel-breeze-vuetify-multi-auth.git
```
- install PHP dependencies via [composer](https://getcomposer.org/):
```
composer install
```
- install js dependencies via [npm](https://nodejs.org/en/):
```
npm install
```
- compile js & css assets:
```
npm run dev
```
- copy .env.example file & create a new .env file using terminal:
```
cp .env.example .env
```
- generate an application key:
```
php artisan key:generate
```
- set project configurations in .env file
- create a MySQL database
- create tables in database with default data:
```
php artisan migrate --seed
```
- use [XAMPP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/en/mamp/windows/) etc. or `php artisan serve` command to use run the application in localhost

### Default Data
Roles:
```
1. Super Admin
2. Admin
3. User
```

Users:
```
1. User
   Email: user@email.com
   Password: 123456789

2. Admin
   Email: admin@email.com
   Password: 123456789

3. Super Admin
   Email: super-admin@email.com
   Password: 123456789
```

### Usage
- Protect *Routes* against specific *Role(s)* like:
```
Route::get('/admin', function () {
    return Inertia::render('AdminDashboard');
})->middleware('auth', 'permit:admin,super-admin')->name('admin.dashboard');
```
- Protect *Routes* against specific *Permission* like:
```
Route::get('/users/{user}/assign-roles', [Controllers\UserController::class, 'assignRolesForm'])
    ->name('users.assign.roles.form')
    ->middleware('can:assign');
Route::post('/users/{user}/assign-roles', [Controllers\UserController::class, 'assignRoles'])
    ->name('users.assign.roles')
    ->middleware('can:assign');
```

### Specifications
- Role based Multi Authentication System.
- Custom Route Middleware ``app/Http/Middleware/Permit.php`` to protect routes for specific roles.
- Dedicated *Dashboard* for each role. See ``routes/web.php``.
- Redirection upon *Login* managed in ``app/Http/Controllers/Auth/AuthenticatedSessionController.php``.
- Auto role allocation in ``app/Http/Controllers/Auth/RegisteredUserController.php``. Any new registered user will get the role *user*.
- Roles CRUD & Permissions Assignment to Roles can be found in ``app/Http/Controllers/RoleController``. Only *admin* & *super-admin* with specific *permissions* can access specific functionalities from frontend.
- Permissions CRUD can be found in ``app/Http/Controllers/PermissionController``.  Only *admin* & *super-admin* with specific *permissions* can access specific functionalities from frontend.
- Roles Assingment to Users can be found in ``app/Http/Controllers/UserController``. Only *admin* & *super-admin* with specific *permissions* can access specific functionalities from frontend.
- Default Authorization can be found in ``App/Providers/AuthServiceProvider``. You can also add your custom *Gates* or *Policies*.
