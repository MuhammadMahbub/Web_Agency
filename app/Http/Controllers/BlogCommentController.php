<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('my.blog.comment.index', [
            'allcomments' => BlogComment::latest()->get(),
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required|numeric',
            'comment'  => 'required',
        ]);

        $blogcomment = BlogComment::create($request->except('_token') + ['created_at' => Carbon::now()]);

        $blogcomment->save();

        return back()->withSuccess('Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function show(BlogComment $blogComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogComment $blogComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogComment $blogComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogComment::find($id)->delete();
        return redirect()->route('blogcomment.index')->with('warning','Deleted successfully');
    }
}
