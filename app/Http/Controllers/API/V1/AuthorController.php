<?php

namespace App\Http\Controllers\API\V1;


use App\Models\Author;
use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\AuthorCollection;

class AuthorController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AuthorCollection(Author::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Author $author)
    {
        return response()->json(new AuthorResource($author), Response::HTTP_OK);
    }
}
