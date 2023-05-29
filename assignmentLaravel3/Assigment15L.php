<!-- Task 1: Request Validation -->
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }
}

use App\Http\Requests\RegisterRequest;
public function register(RegisterRequest $request)
    {
    
    }




// Task 2: Request Redirect
use Illuminate\Http\RedirectResponse;

Route::get('/home', function () {
    return new RedirectResponse('/dashboard', 302);
});


// Task 3: Global Middleware

// php artisan make:middleware LogRequestMiddleware
public function handle($request, Closure $next)
{
    \Illuminate\Support\Facades\Log::info('Request: ' . $request->getMethod() . ' ' . $request->fullUrl());

    return $next($request);
}
protected $middleware = [
    \App\Http\Middleware\LogRequestMiddleware::class,
];


// Task 4: Route Middleware


// php artisan make:middleware AuthMiddleware
public function handle($request, Closure $next)
{
    if (!auth()->check()) {
        abort(403, 'Unauthorized');
    }

    return $next($request);
}

use App\Http\Middleware\AuthMiddleware;

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/profile', function () {
        // Profile route logic
    });

    Route::get('/settings', function () {
        // Settings route logic
    });
});



// Task 5: Controller

// php artisan make:controller ProductController --resource
public function index()
{
    
}

public function create()
{
  
}

public function store(Request $request)
{
   
}

public function edit($id)
{
   
}

public function update(Request $request, $id)
{

}

public function destroy($id)
{

}




// Task 6: Single Action Controller

// php artisan make:controller ContactController
public function __invoke(Request $request)
{
    // Process the contact form submission and send an email
}



// Task 7: Resource Controller

php artisan make:controller PostController --resource




// Task 8: Blade Template Engine

// Create a new Blade view file called welcome.blade.php inside the resources/views 
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>
</head>
<body>
    <nav>
        <!-- Navigation bar HTML code -->
    </nav>

    <section>
        <h1>Welcome to Laravel!</h1>
        <!-- Additional content -->
    </section>
</body>
</html>
