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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FeedResource::collection(Feed::paginate(20));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedRequest $request)
    {
        $request["user_id"] = Auth::user()->id;
        $feed = Feed::create($request->all());
        return new FeedResource($feed);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Feed::findOrFail($id);
        return new FeedResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedRequest  $request
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedRequest $request, $id)
    {
        $feed =  Feed::findOrFail($id);
        $feed->update($request->all());
        return new FeedResource($feed);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
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
