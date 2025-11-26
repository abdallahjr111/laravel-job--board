<?php


use App\Http\Controllers\api\v1\PostApiController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

// rest API (restful api)=> HTTP Standard
// REQUEST=> GET<POST<DELETE<PUT<PATCH
// RESONSE=> 200,201,204,400,404,500
Route::prefix('v1')->group(function(){
    Route::apiResource('post', PostApiController::class);
});
