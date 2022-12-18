<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // add blog
    public function addBlog(Request $request){
        $data = $this->getBlogData($request);
        Blog::create($data);
        return redirect('/');

    }

    // delete blog
    public function blogDelete($id){
        Blog::where('id',$id)->delete();
        return back();
    }

    //edit blog Page
    public function editBlog($id){
        $blog = Blog::where('id',$id)->first()->toArray();
        return view('edit',compact('blog'));
    }

    //update Blog
    public function update(Request $request){
        $updateData = $this->getBlogData($request);
        $id = $request->blogId;
        Blog::where('id',$id)->update($updateData);
        return redirect('/');

    }

    //Get Blog Data
    private function getBlogData($request){
        return [
            'title' => $request->title,
            'username' => $request->username,
            'body' => $request->body
        ];
    }
}
