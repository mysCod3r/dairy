<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Models\Feed;

class FeedController extends Controller
{
    public function index(){
        $feeds =  FeedResource::collection(Feed::all())->jsonSerialize();
        return view("pages.feeds", ['feeds' => $feeds]);
    }
}
