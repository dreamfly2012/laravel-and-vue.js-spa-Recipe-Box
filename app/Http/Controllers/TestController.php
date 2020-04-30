<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api')->only('logout');
    }

    //
    public function index()
    {
        //$ref = new \ReflectionClass(TestController::class);
        //dump($ref->getMethods());
        $a = [3,3,5];
        dump($a);

        //echo __CLASS__;
        //return "hello world";
        //var_dump(get_class($this));
    }
}
