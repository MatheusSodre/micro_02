
<?php

use App\Http\Controllers\Admin\Evaluation\EvaluationController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    // ->middleware('auth')
    ->group(callback: function () {
        Route::get('/evaluations', [EvaluationController::class, 'index'])->name('evaluation.index');


    });


    Route::get('/', function () {
        return response()->json(['message' => 'success']);
    });
    Route::middleware(['auth', 'auth.session'])->group(function () {

    });
