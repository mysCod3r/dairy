<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory as FactoryAlias;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ControllerLogin extends Controller
{
    public function index(): Application|FactoryAlias|View
    {
        return view('pages/login');
    }

    public function create(Response $response)
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
