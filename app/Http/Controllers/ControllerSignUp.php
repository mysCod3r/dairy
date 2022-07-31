<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory as FactoryAlias;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ControllerSignUp extends Controller
{

    public function index(): Application|FactoryAlias|View
    {
        return view('pages/signup');
    }

    public function create(Response $response)
    {


    }

    public function store(Request $request)
    {
        $user = User::create([
            "name" => $request["username"],
            "email" => $request["email"],
            "password" => $request["password"],
        ]);

        return $user;

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

    public function qwer()
    {


    }


}
