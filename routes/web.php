<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [
    'as' => 'root_path',
    'uses' => 'App\Http\Controllers\PagesController@home'
]);



Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'App\Http\Controllers\PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'App\Http\Controllers\ContactController@contact'
]);

Route::get('/client', [
    'as' => 'client_path',
    'uses' => 'App\Http\Controllers\PagesController@login'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'App\Http\Controllers\ContactController@store'
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin' , [
    'as' => 'produit_path',
    'uses' => 'App\Http\Controllers\PagesController@admin'
]);



Route::resource('produits', 'App\Http\Controllers\ProduitsController');

Route::resource('categorie', 'App\Http\Controllers\CategoriesController');

Route::post('/produits/create', 'App\Http\Controllers\ProduitsController@store');

Route::post('/categorie/create', 'App\Http\Controllers\CategoriesController@store');

Route::get('/produits', [
    'as' => 'categorie_path',
    'uses' => 'App\Http\Controllers\CategoriesController@index'
]);



Route::get('/produit/{idProduit}', [
    'as' => 'produits_path',
    'uses' => 'App\Http\Controllers\ProduitsController@showall'
]);


Route::get('/listp', [
    'as' => 'produits_path',
    'uses' => 'App\Http\Controllers\ProduitsController@listp'
]);

Route::delete('/deletep/{produits}', 'App\Http\Controllers\ProduitsController@delete');

Route::get('/listc', [
    'as' => 'categorie_path',
    'uses' => 'App\Http\Controllers\CategoriesController@listc'
]);

Route::delete('/deletec/{categorie}', 'App\Http\Controllers\CategoriesController@delete');

Route::get('/listu', [
    'as' => 'users_path',
    'uses' => 'App\Http\Controllers\userController@listu'
]);

Route::delete('/deleteu/{users}', 'App\Http\Controllers\userController@delete');

Route::post('/add_to_cart', 'App\Http\Controllers\ProduitsController@addToCart');

Route::get('/cartList', [
    'as'=>'cart_path',
    'uses'=> 'App\Http\Controllers\ProduitsController@cartl'
]);

Route::get("deletec/{id}", [
    'as'=>'carts_path',
    'uses'=> 'App\Http\Controllers\ProduitsController@deletec'
]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//For User
/*Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
}); */