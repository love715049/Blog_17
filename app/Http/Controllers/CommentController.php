<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        return response()->json([
            Comment::create($request->only(['post_id', 'messages']))
        ]);
    }
}
