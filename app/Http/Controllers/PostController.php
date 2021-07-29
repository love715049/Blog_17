<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        return response()->json([
            Post::create($request->only(['title', 'content']))
        ]);
    }
}
