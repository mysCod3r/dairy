<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory as FactoryAlias;
use Illuminate\Contracts\View\View;

class SignUpController extends Controller
{

    public function index(): Application|FactoryAlias|View
    {
        return view('pages/signup');
    }



}
