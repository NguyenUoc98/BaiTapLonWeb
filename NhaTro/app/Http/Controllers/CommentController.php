<?php

namespace App\Http\Controllers;
use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getComment(){
        $comments = Comment::all();
        return view('pages.house_detail', compact('comments'));
    }
    
}
