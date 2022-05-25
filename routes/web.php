<?php
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use app\http\controllers\ArticleController;
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


Route::get('/', 'ArticleController@index')->name('welcome');


Route::get('/article/{id}' , 'ArticleController@show')->name('article_id');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'] , function(){
    
    Route::get('/' , 'HomeArticle@index')->name('home');
    Route::get('/create' , 'ArticleController@create')->name('create_article');
    Route::get('/store' , 'ArticleController@store')->name('store_article');
    Route::get('/edit/{id}' , 'ArticleController@edit')->name('edit_article');
    Route::get('/update/{id}' , 'ArticleController@update')->name('update_article');
    Route::get('/delete' , 'ArticleController@destroy')->name('delete_article');
});



