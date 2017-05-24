<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use Session;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin', []);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request, array(
            'title' => 'required|max:255',
            'niceurl' => 'required|alpha_dash|min:5|max:255|unique:posts,niceurl',
            'category_id' => 'required|integer',
            'body' => 'required'
        ));

        //Storing in database
        $post = new Post;

        $post->title = $request->title;
        $post->niceurl = $request->niceurl;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        Session::flash('success', 'Innlegget er publisert!');

        //Redirect
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $catArray = array();
        foreach ($categories as $category)
        {
            $catArray[$category->id] = $category->name;
        }
        return view('posts.edit')->withPost($post)->withCategories($catArray);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        //Validation

        if($request->input('niceurl') == $post->niceurl)
        {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required'
            ));
        }
        else {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'niceurl' => 'required|alpha_dash|min:5|max:255|unique:posts,niceurl',
                'body' => 'required'
            ));
        }

        //Storing in database
        $post->title = $request->input('title');
        $post->niceurl = $request->input('niceurl');
        $post->body = $request->input('body');

        $post->save();

        Session::flash('success', 'Innlegget ble oppdatert!');

        //Redirect
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'Innlegget ble slettet!');

        return redirect()->route('posts.index');
    }

    public function getSingle($niceurl) {

        $post = Post::where('niceurl', '=', $niceurl)->first();

        return view('posts.single')->withPost($post);
    }

}