<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'information' => 'user',
        'data' => 'contact'
    ];
    return view('test', $data);
})->name('test');

Route::get('/info', function () {
    $dataUser = [
        'users' => [
            [
                'name' => 'Gabriele',
                'surname' => 'Bianchi',
                'address' => 'via paradiso'
            ],
            [
                'name' => 'Luca',
                'surname' => 'Rossi',
                'address' => 'via dei gattini'
            ]
        ]
    ];
    return view('info', $dataUser);
})->name('info');

Route::get('/contact', function () {
    $dataContact = [
        'contact' => [
            [
                'email' => 'gabry@gmail.com',
                'phone' => 3335556667
            ],
            [
                'email' => 'luca@gmail.com',
                'phone' => 3334747437
            ]
        ]
    ];
    return view('contact', $dataContact);
})->name('contact');

?>

