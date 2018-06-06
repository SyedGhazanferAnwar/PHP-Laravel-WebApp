<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Purifier;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts=Post::where('id','>=','0')->orderBy('created_at','desc')->paginate(5);
        return view('posts/index')->with('posts',$allPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $single_element=new POST();
        $single_element->title=$request->title;
        $single_element->body=Purifier::clean($request->body);
        $single_element->user_id=auth()->user()->id;
        $single_element->save();
        return redirect('/dashboard')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlePost=Post::find($id);
        return view('posts/single')->with('singlepost',$singlePost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single=POST::find($id);
        $userid=auth()->user()->id;
        if($single->user_id != $userid){
            return redirect('/dashboard')->with('error','Unauthorized page');
        }
        return view('posts/edit')->with('single',$single);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $single_element=POST::find($id);
        $single_element->title=$request->title;
        $single_element->body=Purifier::clean($request->body);
        $single_element->save();
        return redirect('/dashboard')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $userid=auth()->user()->id;
        if($post->user_id != $userid){
            return redirect('/dashboard')->with('error','Unauthorized page');
        }
        $post->delete();
        return redirect('/dashboard')->with('success','Post Deleted');
    }
}
