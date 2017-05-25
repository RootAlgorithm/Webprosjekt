<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Slide;

class PageController extends Controller
{
    public function getNearby()
    {
        $nearby = Post::where('category_id', '=', 1)->get();
        return view('pages.nearby')->withPosts($nearby);
    }

    public function getCampus()
    {
        $campus = Post::where('category_id', '=', 2)->get();
        return view('pages.campus')->withPosts($campus);
    }

    public function getDiscount()
    {
        $discount = Post::where('category_id', '=', 3)->get();
        return view('pages.discount')->withPosts($discount);
    }

    public function getMain()
    {
        $posts = Post::orderBy('updated_at', 'desc')->take(6)->get();
        $slides = Slide::all();
        return view('main')->withSlides($slides)->withPosts($posts);
    }
}
