<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Member;
class FrontendController extends Controller
{
    public function index()
    {
        $post = Post::all();
        

        return view('frontend.home', ['post' => $post]);
    }

    public function show_post()
    {
        $post = Post::all();
        return view('frontend.post',  ['post' => $post]);
    }

    public function show_member()
    {
        $members = Member::all();
        return view('frontend.members', ['members' => $members]);
    }

    public function about()
    {
        return view('frontend.about');
    }
}
