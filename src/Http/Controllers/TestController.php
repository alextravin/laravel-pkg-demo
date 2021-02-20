<?php

namespace AlexTravin\SkillsTest\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index()
    {
        return view('packageTest::test');
    }
}