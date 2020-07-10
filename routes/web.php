<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('welcome');
// open and resize an image file
//    $img = Image::make('IMG_20200222_155843.jpg');
//    $img->resize(null, 400, function ($constraint) {
//        $constraint->aspectRatio();
//        $constraint->upsize();
//    });
//
//// save file as jpg with medium quality
//    $img->save('public/bar.jpg', 60);

// save the same file as jpg with default quality
//    $img->save('new.jpg');

});



Auth::routes(['verify' => true]);
Route::resource('/pizza', 'PizzaController',
    ['names' =>[
        'index'=>'pizza.index',
        'create'=>'pizza.create',
        'store'=>'pizza.store',
        'edit'=>'pizza.edit',
        'update'=>'pizza.update',
        'show'=>'pizza.show',
        'destroy'=>'pizza.destroy'
    ]]);

Route::get('/home', 'HomeController@index')->name('home');

