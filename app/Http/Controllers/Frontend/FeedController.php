<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feed;

class FeedController extends Controller
{
    public function index(){
        $feeds = Feed::all();
        return view("pages.feeds", ['feeds' => $feeds]);
    }
}
