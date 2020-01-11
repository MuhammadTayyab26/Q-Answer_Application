<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionController');

Route::resource('answers', 'AnswerController')
    ->except([
        'index',
        'show',
        'create',
    ]);

Route::resource('votes', 'VoteController');

//Route::resource('vote, 'UpVoteController');
//Route::resource('votes', 'DownVoteController');