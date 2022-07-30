<?php

namespace App\Http\Controllers;
use App\Models\ModelFeature;
use http\Env\Response;
use Illuminate\Http\Request;


class ControllerFeature extends Controller
{
    public function showAll(){
        return ModelFeature::get();
    }

    public function show($id){
        return ModelFeature::find($id);
    }

    public function add(Request $request){
        $data = ModelFeature::create([
            "id" => $request["id"],
        ]);
        echo $data;
    }

    public function delete($id){
        ModelFeature::whereId($id)->delete();
    }

    public function update($id,$yeniVeri){
        ModelFeature::whereId($id)->update([
            "id"=>"$yeniVeri",
        ]);
    }

    public function denemePost($id){
        $feature = ModelFeature::find($id);
        $gelen = request() -> get();
        $feature-> feed_name = $gelen -> feed_name;
        
    }
}
