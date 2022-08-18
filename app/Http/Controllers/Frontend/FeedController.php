<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedRequest;
use App\Http\Requests\UpdateFeedCategoryRequest;
use App\Http\Requests\UpdateFeedRequest;
use App\Http\Resources\FeedCategoryResource;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use App\Models\FeedCategory;
use Illuminate\Support\Facades\Route;

class FeedController extends Controller
{

    public function index(){
        $feeds =  FeedResource::collection(Feed::all())->jsonSerialize();
        $categories = FeedCategoryResource::collection(FeedCategory::all()->jsonSerialize());
        return view("pages.feeds", ['feeds' => $feeds,'categories' => $categories]);

    }

    public function store(StoreFeedRequest $request){
        new FeedResource(Feed::create($request->all()));
        return route('addFeeds');
    }

    public function update(UpdateFeedRequest $request, $id)
    {
        return "update fonksiyonu";
//        $feed =  Feed::findOrFail($id);
//        $feed->update($request->all());
//        return new FeedResource($feed);
    }


    public function destroy($id)
    {
        $feed = Feed::findOrFail($id);
        $feed->delete();
        return response('', 204);
    }


}
