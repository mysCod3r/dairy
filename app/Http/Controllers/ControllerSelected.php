<?php

namespace App\Http\Controllers;

use App\Models\ModelSelected;
use Illuminate\Http\Request;

class ControllerSelected extends Controller
{
    public function showAll()
    {
        return ModelSelected::get();
    }

    public function show($id)
    {
        return ModelSelected::find($id);
    }

    public function add(Request $request)
    {
        $data = ModelSelected::create([
            "s_feed_name" => $request["s_feed_name"],
        ]);
        echo $data;
    }

    public function delete($id)
    {
        ModelSelected::whereId($id)->delete();
    }

    public function update($id, $yeniVeri)
    {
        ModelSelected::whereId($id)->update([
            "s_feed_name" => "$yeniVeri",
        ]);

    }
}
