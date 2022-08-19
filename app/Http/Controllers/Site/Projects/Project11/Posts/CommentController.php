<?php

namespace App\Http\Controllers\Site\Projects\Project11\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects\Project11\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $comment = Comment::create([
            'post_id'  => $request->post_id,
            'text'     => $request->text
        ]);
        // return redirect('/personal-blog' . '/' . $comment->post_id);
    }
}
