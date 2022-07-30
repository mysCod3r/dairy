<?php

namespace App\Http\Controllers;
use App\Models\ModelCategory;
use Illuminate\Http\Request;

class ControllerCategory extends Controller
{

    public function showAll(){
        return ModelCategory::get();
    }

    public function show($id){
        return ModelCategory::find($id);
    }

    public function add(Request $request){
        $data = ModelCategory::create([
            "category_name" => $request["category_name"],
        ]);
        echo $data;
    }

    public function delete($id){
        ModelCategory::whereId($id)->delete();
    }

    public function update($id,$yeniVeri){
        ModelCategory::whereId($id)->update([
            "category_name"=>"$yeniVeri",
        ]);
    }

}
