<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\MainController;

Route :: get('/', [MainController :: class, 'index']) -> name('home');
