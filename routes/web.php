<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'SiteController@index')->name('homepage');
Route::get('/discussion/{idTicket}', ['uses' => 'SiteController@discussion'])->name('discussion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/ticket', 'TicketController@index')->name('ticket');
Route::get('/messagerie', 'MessageController@afficherMessagerie')->name('messagerie');
Route::get('/detailsticket/{number}', 'TicketController@afficherDetails');
Route::get('/writeMessage/{idTicket}/{idDestinataire}', 'MessageController@writeNewMessage');
Route::get('/faq', 'QuestionController@afficherFaq')->name('faq');
Route::get('/ajoutQuestion', 'QuestionController@ajoutQuestion');
Route::post('storeQuestion', 'QuestionController@store')->name('storeQuestion');
Route::post('addnewmessage/{idTicket}', 'MessageController@addNewMessage');
Route::post('/storeticket', 'TicketController@store')->name('storeticket');