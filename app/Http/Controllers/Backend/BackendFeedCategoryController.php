<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedCategoryRequest;
use App\Http\Requests\UpdateFeedCategoryRequest;
use App\Http\Resources\FeedCategoryResource;
use App\Models\FeedCategory;

class BackendFeedCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FeedCategoryResource::collection(FeedCategory::paginate(20));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedCategoryRequest $request)
    {
        $category = FeedCategory::create($request->all());
        return new FeedCategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedCategory  $feedCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id, FeedCategory $feedCategory)
    {
        $category = FeedCategory::findOrFail($id);
        return new FeedCategoryResource($category);
 //       return FeedCategory::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedCategoryRequest  $request
     * @param  \App\Models\FeedCategory  $feedCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedCategoryRequest $request, $id)
    {
       $feedCategory =  FeedCategory::findOrFail($id);
       $feedCategory->update($request->all());
       return new FeedCategoryResource($feedCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedCategory  $feedCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedCategory = FeedCategory::findOrFail($id);
        $feedCategory->delete();
        return response('', 204);
    }
}
