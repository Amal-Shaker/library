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
    return view('welcome');
});
Route::get('test', function () {
    return view('browse.search');
});
/* Admain */
Route::get('loginAdmain','Admain\AdmainAccountController@create');
Route::post('admain/store','Admain\AdmainAccountController@store');
Route::get('controlpage','Admain\AdmainAccountController@index');

Route::get('bookcreate', function () {
    return view('bookauthor.create');
});

/*Author*/
Route::get('author/create','Author\BookAuthorController@create');
Route::post('author/store','Author\BookAuthorController@store');
Route::get('author','Author\BookAuthorController@index');
Route::get('author/edit/{id}','Author\BookAuthorController@edit');
Route::post('author/update/{id}','Author\BookAuthorController@update');
Route::post('author/delete/{id}','Author\BookAuthorController@destroy');

/*ranking */
Route::get('bookRanking/create','Ranking\BookRankingController@create');
Route::post('bookRanking/store','Ranking\BookRankingController@store');
Route::get('bookRanking','Ranking\BookRankingController@index');
Route::get('bookRanking/edit/{id}','Ranking\BookRankingController@edit');
Route::post('bookRanking/update/{id}','Ranking\BookRankingController@update');
Route::post('bookRanking/delete/{id}','Ranking\BookRankingController@destroy');
/*publish house*/
Route::get('publishHouse/create','PublishHouse\BookPublishingHouseController@create');
Route::post('publishHouse/store','PublishHouse\BookPublishingHouseController@store');
Route::get('publishHouse','PublishHouse\BookPublishingHouseController@index');
Route::get('publishHouse/edit/{id}','PublishHouse\BookPublishingHouseController@edit');
Route::post('publishHouse/update/{id}','PublishHouse\BookPublishingHouseController@update');
Route::post('publishHouse/delete/{id}','PublishHouse\BookPublishingHouseController@destroy');
/*book*/
Route::get('book/create','Book\BookController@create');
Route::post('book/store','Book\BookController@store');
Route::get('Book','Book\BookController@index');
Route::get('book/edit/{id}','Book\BookController@edit');
Route::post('book/update/{id}','Book\BookController@update');
Route::post('book/delete/{id}','Book\BookController@destroy');

/*browse*/
Route::get('browse/create','Browser\BrowserBookControllor@create');
Route::get('browse/showAllBook','Browser\BrowserBookControllor@showAllBook');
Route::get('browse/showAllAuthor','Browser\BrowserBookControllor@showAllAuthor');


Route::get('browse/showAllPublishHouse','Browser\BrowserBookControllor@showAllPublishHouse');
Route::get('browse/showAllRanking','Browser\BrowserBookControllor@showAllRanking');

Route::get('browse/showAuthorWithBooks','Browser\BrowserBookControllor@showAuthorWithBooks');

Route::get('browse/showRankingWithBooks','Browser\BrowserBookControllor@showRankingWithBooks');

Route::get('browse/showPublishHouseWithBooks','Browser\BrowserBookControllor@showPublishHouseWithBooks');
/*****************/
Route::post('browse/search','Browser\BrowserBookControllor@search');
Route::get('browse/base','Browser\BrowserBookControllor@base');
Route::get('browse/showBook/{id}','Browser\BrowserBookControllor@indexBook');


Route::get('example','Author\BookAuthorController@index');
