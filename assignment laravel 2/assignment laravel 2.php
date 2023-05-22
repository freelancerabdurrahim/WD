<?

// Answer 1:
$name = $request->input('name');


// Answer 2:
$userAgent = $request->header('User-Agent');


// Answer 3:
$page = $request->query('page', null);



// Answer 4:
return response()->json([
    'message' => 'Success',
    'data' => [
        'name' => 'John Doe',
        'age' => 25
    ]
]);



// Answer 5:
$request->file('avatar')->store('public/uploads');



// Answer 6:
$rememberToken = $request->cookie('remember_token', null);



// Answer 7:
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});

