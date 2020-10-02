<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Posts\AddRequest;
use App\Http\Requests\Posts\EditRequest;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('posts')->orderBy('id', 'asc')->paginate(5);
        return view('pages.posts.list-post', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posts.add-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $input['name'] = $request->get('name');
        $input['description'] = $request->get('description');
        $post = Post::create($input);
        if($post)
        {
            return redirect()->route('posts.index');
        }
        else
        {
            return redirect()->back()->with('name', $input['name']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('pages.posts.view-post')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('pages.posts.edit-post', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $post = Post::find($id);
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->save();
        return redirect()->route('posts.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tickToDelete(Request $request)
    {
        $delid = $request->input('delid');
        if($delid != ''){
            $post = Post::whereIn('id', $delid)->delete();
            return redirect()->route('posts.index');
        }
        else
        {
            return redirect()->back()->with('msg', 'Sorry...You haven`t tick yet.');
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $data = Post::where('name', 'LIKE', '%' . $search . '%')
        ->paginate(5);
        $data->appends(['search' => $search]); // Gán biến của giá trị search trên URL
        return view('pages.posts.list-post', compact('data', 'search'));
    }
}
