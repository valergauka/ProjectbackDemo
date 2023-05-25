<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Review;
use App\Models\Comment;
use App\Models\Op;
use App\Models\User;
use App\Models\ApproveReview;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OpController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ApproveController;

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
    return $request->user();});

Route::get('/review', function (){
    $review = Review::all();
    return $review;});

Route::get('/comment', function (){
    $comment = Comment::all();
    return $comment;});

Route::get('/op', function (){
    $op = Op::all();
    return $op;});


Route::get('/user', function (){
    $user = User::all();
    return $user;});

Route::get('/approve', function (){
    $approve =ApproveReview::all();
    return $approve;});


Route::post('/user', [UserController::class, 'addUser']);
Route::post('/op', [OpController::class, 'addOp']);
Route::post("/review", [ReviewController::class, 'addReview']);
Route::post('/approve', [ApproveController::class, 'addApprove']);
Route::post("/deleteReview", [ReviewController::class, 'deleteReview']);
Route::post("/deleteOp", [OpController::class, 'deleteOp']);
Route::post("/deleteUser", [UserController::class, 'deleteUser']);
Route::post('/upload-files', [FileController::class, 'uploadFiles']);
