<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\BlogLike;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('ok');
        $blogs = Blog::latest()->get();

        return view('my.blog.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('my.blog.blog.create', [
            'categories' => BlogCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title) . "-" . Str::random(9);

        $request->validate([
            'title'           => 'required',
            's_description'   => 'required',
            'blog_photo'      => 'required|image',
            'editors_photo'   => 'image',
        ]);

        $blog = Blog::create($request->except('_token') + ['created_at' => Carbon::now(), 'user_id' => Auth::id(), 'slug' => $slug, 'editors_photo' => 'default.png']);

        if ($request->hasFile('blog_photo')) {

            $blog_photo  = $request->file('blog_photo');
            $filename    = uniqid() . '.' . $blog_photo->extension('blog_photo');
            $location    = public_path('uploads/blog_photos');

            $blog_photo->move($location, $filename);

            $blog->blog_photo = $filename;
        }

        if ($request->hasFile('editors_photo')) {

            $editors_photo  = $request->file('editors_photo');
            $filename    = uniqid() . '.' . $editors_photo->extension('editors_photo');
            $location    = public_path('uploads/editors_photos');

            $editors_photo->move($location, $filename);

            $blog->editors_photo = $filename;
        };

        $blog->save();

        return redirect()->route('blog.index')->withSuccess('Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
//
    }


    public function blog_details($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('my.blog.blog.show', compact('blog'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $category = BlogCategory::all();
        return view('my.blog.blog.edit', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'          => 'required',
            'editors_photo' => 'image',
            's_description'  => 'required',
            'blog_photo'     => 'image'
        ]);

        $blog->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if ($request->hasFile('blog_photo')) {

            $blog_photo  = $request->file('blog_photo');
            $filename    = uniqid() . '.' . $blog_photo->extension('blog_photo');
            $location    = public_path('uploads/blog_photos');

            $blog_photo->move($location, $filename);

            $blog->blog_photo = $filename;
        }

        if ($request->hasFile('editors_photo')) {

            $editors_photo  = $request->file('editors_photo');
            $filename    = uniqid() . '.' . $editors_photo->extension('editors_photo');
            $location    = public_path('uploads/editors_photos');

            $editors_photo->move($location, $filename);

            $blog->editors_photo = $filename;
        }

        $blog->save();

        return redirect()->route('blog.index')->withSuccess('Created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        BlogLike::where('blog_id',$blog->id)->delete();
        BlogComment::where('blog_id',$blog->id)->delete();
        $blog->delete();
        return redirect()->route('blog.index')->with('warning', 'Data destroyed');
    }


}
