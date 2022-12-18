<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    //get all blogs
    public function blogs(){
        $blogs = Blog::orderBy('created_at','desc')->get();
        return response()->json($blogs, 200);
    }

    //add new blog
    public function addBlog(Request $request){
        $data = $this->getBlogData($request);

        $response = Blog::create($data);
        return response()->json($data, 200);

    }

    //delete blog
    public function deleteBlog(Request $request){
        $data = Blog::where('id',$request->id)->first();

        if(isset($data)){
            Blog::where('id',$request->id)->delete();
            return response()->json(['status'=>true,"message"=>"delete success"], 200);
        }
        return response()->json(['status'=>false,"message"=>"There is no data"], 200);
    }

    //blog detail
    public function blogDetail($id){
        $data = Blog::where('id',$id)->first();

        if(isset($data)){
            return response()->json(['status'=>true,"blog"=>$data], 200);
        }
        return response()->json(['status'=>false,"message"=>"There is no data"], 200);
    }


    //blog update
    public function blogUpdate(Request $request){
        $blogId = $request->id;
        $sourceData = Blog::where('id',$blogId)->first();
        if(isset($sourceData)){
            $data = $this->getBlogData($request);
            Blog::where('id',$blogId)->update($data);
            return response()->json(['status' => true,'message' => "blog update success"], 200);
        }
            return response()->json(['status' => false,'message' => "There is no data update..."], 200);

    }


    //get blog data
    private function getBlogData($request){
        return [
            'title' => $request->title,
            'body' => $request->body,
            'username' => $request->username,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
