<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Review;
use App\Models\Comment;
use App\Models\Op;
use App\Models\User;
use App\Models\ApproveReview;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/review', function (){
    $review = Review::all();
    return $review;
});

Route::get('/comment', function (){
    $comment = Comment::all();
    return $comment;
});

Route::get('/op', function (){
    $op = Op::all();
    return $op;
});


Route::get('/user', function (){
    $user = User::all();
    return $user;
});

Route::get('/approve', function (){
    $approve =ApproveReview::all();
    return $approve;
});

