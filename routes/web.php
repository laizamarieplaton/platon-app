<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Service Container
Route::get('test-container', function (Request $request){
    $input = $request->input(('key'));
    return $input;
});

//Service Providers
Route::get('/test-provider', function(UserService $userService){
    return $userService->ListUsers();
});

//Service Provider
Route::get('/test-users', [UserController::class, 'index']);

//Service Facades
Route::get('/test-facades', function (UserService $userService){
    return Response::json($userService->ListUsers());
});