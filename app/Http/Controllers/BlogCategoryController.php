<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('my.blog.category.index', [
            'categories' => BlogCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('my.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        BlogCategory::insert([
            'category_name'    => $request->category_name,
            'created_at'       => Carbon::now(),
        ]);
        return redirect()->route('blogcategory.index')->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogcategory)
    {
        return view('my.blog.category.show', compact('blogcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogcategory)
    {
        return view('my.blog.category.edit', compact('blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogcategory)
    {
        $request->validate([
            'category_name'  => 'required',
        ]);

        $blogcategory->category_name = $request->category_name;
        $blogcategory->save();

        return redirect()->route('blogcategory.index')->withSuccess('Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogcategory)
    {
        Blog::where('category_id',$blogcategory->id)->delete();
        $blogcategory->delete();
        return redirect()->route('blogcategory.index')->with('warning','Data destroyed');
    }
}
