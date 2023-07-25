<!-- Step 1: Set up a new Laravel project? -->
composer create-project --prefer-dist laravel/laravel todo-backend-api
cd todo-backend-api


<!-- Step 3: Install required packages -->
composer require tymon/jwt-auth
composer require fruitcake/laravel-cors


<!-- Step 4: Configure JWT authentication -->
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"



<!-- Step 5: Generate the User model and migration -->
php artisan make:model User -m


<!-- Step 6: Run the migration -->
php artisan migrate


<!-- Step 7: Implement User authentication -->
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    // ...

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}



<!-- Step 8: Implement authentication routes and controllers -->
php artisan make:controller AuthController


<!-- Step 9: Create the Todo model and migration-->
php artisan make:model Todo -m


<!-- Step 10: Implement CRUD for Todo items -->
php artisan make:controller TodoController


<!-- Step 11: Implement JWT middleware -->
php artisan make:middleware JwtMiddleware





