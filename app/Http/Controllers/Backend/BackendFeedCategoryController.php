<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedCategoryRequest;
use App\Http\Requests\UpdateFeedCategoryRequest;
use App\Http\Resources\FeedCategoryResource;
use App\Models\FeedCategory;

class BackendFeedCategoryController extends Controller
{

    public function index()
    {
        return FeedCategoryResource::collection(FeedCategory::all());
    }

    public function store(StoreFeedCategoryRequest $request)
    {
        $category = FeedCategory::create($request->all());
        return new FeedCategoryResource($category);
    }


    public function show($id)
    {
        return new FeedCategoryResource(FeedCategory::findOrFail($id));
    }

    public function update(UpdateFeedCategoryRequest $request, $id)
    {
       $feedCategory =  FeedCategory::findOrFail($id);
       $feedCategory->update($request->all());
       return new FeedCategoryResource($feedCategory);
    }


    public function destroy($id)
    {
        $feedCategory = FeedCategory::findOrFail($id);
        $feedCategory->delete();
        return response('', 204);
    }
}
