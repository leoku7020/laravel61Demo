<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IndexService;
use App\User;

class IndexController extends Controller
{
    //
    public function __construct(IndexService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $say = $this->service->sayHello();

        return view('test', compact('say'));
    }
}
