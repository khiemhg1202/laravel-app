<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

Route::get('/',
    [PagesController::class,
    'index'
]);

Route::get('/about',
    [PagesController::class,
    'about'
]);


// Route::get('/products', [
//     ProductsController::class,
//     'index' // index function of ProductsController
// ]);

// Route::get('/products/{productName}', [
//     ProductsController::class,
//     'detail'
// ]);

// Route::get('/products/{id}/{productName}', [
//     ProductsController::class,
//     'detail'
// ]) -> where([
//     'productName'=>'[a-zA-Z0-9]+',
//     'id'=> '[0-9]+',
// ])
// ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('home');
// });


/*
Route::get('/users', function() {
    return 'Đây là trang chủ';
});

Route::get('/abountMe', function() {
    return response() ->json([
        'name' => 'Chau Hoang Khiem',
        'email' => 'khiemhg1202@gmail.com'
    ]);
});
// trở về trang chủ
Route::get('/something', function() {
    return redirect('/');
});

// đến trang abountMe
Route::get('/something', function() {
    return redirect('/abountMe');
});
*/

