<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function dashboard(){
        return view("blogs_view.dashboard");
    }
    public function viewBlogs(){
        $blog = Blog::all();
        return view("blogs_view.viewBlogs", ['blogs' => $blog]);
    }

    public function saveBlog(Request $request){
        $data = $request->validate([
            "author"=>"required",
            "title"=>"required",
            "subtitle"=>"required",
            "blog_content"=> "required",
        ]);

        $newblog = Blog::create($data);

        return redirect(route('blogs_view.dashboard'));
    }

    public function editBlog(Blog $blog){
        return view('blogs_view.editBlog', ['blog' => $blog]);
    }

    public function  updateBlog(Blog $blog, Request $request){
        $data = $request->validate([
            "author"=>"required",
            "title"=>"required",
            "subtitle"=>"required",
            "blog_content"=> "required",
        ]);

        $blog->update($data);
        $blogs = Blog::all();
        return view('blogs_view.viewBlogs', compact('blogs'));

    }

    public function deleteBlog(Blog $blog){
        $blog->delete();
        $blogs = Blog::all();
        return view('blogs_view.viewBlogs', compact('blogs'));
    }
}
