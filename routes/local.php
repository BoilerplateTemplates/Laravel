<?php

use Illuminate\Support\Facades\Route;

Route::get('library', function () {
    return view('local.library');
});
