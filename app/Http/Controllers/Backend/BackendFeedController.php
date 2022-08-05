<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedRequest;
use App\Http\Requests\UpdateFeedRequest;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use Illuminate\Support\Facades\Auth;

class   BackendFeedController extends Controller
{

    public function index()
    {
        return FeedResource::collection(Feed::all())->jsonSerialize();
       // $feed =  FeedResource::collection(Feed::paginate(20));
       // return $feed->jsonSerialize();
    }

    public function store(StoreFeedRequest $request)
    {
        $request["user_id"] = Auth::user()->id;
        $feed = Feed::create($request->all());
        return new FeedResource($feed);

    }

    public function show($id)
    {

        return new FeedResource(Feed::findOrFail($id));
    }


    public function update(UpdateFeedRequest $request, $id)
    {
        $feed =  Feed::findOrFail($id);
        $feed->update($request->all());
        return new FeedResource($feed);
    }


    public function destroy($id)
    {
        $feed = Feed::findOrFail($id);
        $feed->delete();
        return response('', 204);
    }

    public function byCategory($id)
    {
        $feeds = Feed::where(['category_id' => $id]);
        return $feeds->get();
    }


}
