<?php

use App\Http\Controllers\comment_replies;
use App\Http\Controllers\post_comments;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resources('comment_replies', comment_repliesController::class );
Route::resources('post_comments', Post_commentsController::class );