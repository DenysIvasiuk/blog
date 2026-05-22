<?php

namespace App\Http\Controllers\Api\Blog;

use App\Models\BlogPost;

use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function index()
    {
        $items = BlogPost::all();
        return $items;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
