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
        $data = DB::table('posts')->orderBy('id', 'asc')->paginate(10);
        return view('pages.posts.list-post', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $posts = Post::create($request->input());
        return response()->json($posts);
        // return view('pages.posts.list-post', compact('posts'));
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
        return response()->json($post);
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
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->save();
        return response()->json($post);
        
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
        ->paginate(10);
        $data->appends(['search' => $search]); // Gán biến của giá trị search trên URL
        return view('pages.posts.list-post', compact('data', 'search'));
    }
}
