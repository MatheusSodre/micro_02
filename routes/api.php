<?php


use App\Http\Controllers\Api\Evaluation\EvaluationController;
use Illuminate\Support\Facades\Route;

Route::get('/evaluations',[EvaluationController::class,'index']);
Route::post('/evaluations/{company}',[EvaluationController::class,'store']);

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
