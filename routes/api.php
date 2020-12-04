<?php

use Illuminate\Support\Facades\Route;

Route::post('/promotion/{slug}', 'EntrantController@store');

Route::post('/entrant/{slug}', 'WinnerController@checkWinner');
