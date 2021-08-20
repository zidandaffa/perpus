<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author/data', 'DataController@authors')->name('author.data');
Route::get('/book/data', 'DataController@books')->name('book.data');
Route::get('/borrow/data', 'DataController@borrows')->name('borrow.data');

Route::resource('author', 'AuthorController');
Route::resource('book', 'BookController');

Route::get('borrow', 'BorrowController@index')->name('borrow.index');
Route::put('borrow/{borrowHistory}/return', 'BorrowController@returnBook')->name('borrow.return');
