<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelFeed;
use Illuminate\Support\Facades\Redirect;


class ControllerFeed extends Controller
{


    public function index(){
        return view("pages/feeds");
    }

    public function showAll(){
        $feeds = ModelFeed::get();
        return view("pages.feeds", ['feeds' => $feeds]);
    }

    public function show(Request $id){
        return ModelFeed::find($id);
    }

    public function add(Request $request){
        $data = ModelFeed::create([
            "feed_name" => $request["feed_name"],
        ]);
        echo $data;
    }

    public function delete($id){
        ModelFeed::whereId($id)->delete();
    }

    public function update($id,$yeniVeri){
        ModelFeed::whereId($id)->update([
            "feed_name"=>"$yeniVeri",
        ]);
    }


}
