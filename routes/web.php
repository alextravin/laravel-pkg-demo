<?php

use Illuminate\Support\Facades\Route;
use AlexTravin\SkillsTest\Http\Controllers\TestController;

Route::get('/start',[TestController::class,'index']);