<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){

        $blog=Blog::all();
        return view('add-blogs',['blog'=>$blog]);
    }

    public function create(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'blog_image' => ['required'],
             'title'=>['required'],
             'author_name'=>['required'],
             'publish_date'=>['required'],
             'blogs'=>['required'],
                
            ],
            [
               
               'blog_image.required' => 'Please upload Blog Image.',
                'title.required' => 'Please enter Title.',
                'author_name.required' => 'Please enter Author Name.',
                'publish_date.required' => 'Please enter Publish Date.',
                'blogs.required' => 'Please enter Blogs.',
               
            ]);
            if ($validator->fails()) {
                $errors = '';
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    $errors .= $message . "<br>";
                }
                return back()->with(['error'=>$errors]);
            }

        $blogcreate=new Blog;

        $filename='';
        if($request->hasFile('blog_image')){
            $file= $request->file('blog_image');
            $filename=rand(0123,9999).time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/'), $filename);
            $blogcreate->blog_image= 'images/'.$filename;
    
        }
        // $blogcreate->blog_image=$request->get('blog_image');
        
        $blogcreate->title=$request->get('title');
        $blogcreate->author_name=$request->get('author_name');
        $blogcreate->publish_date=$request->get('publish_date');
        $blogcreate->blogs=$request->get('blogs');
        // $blogcreate->blog_editor=$request->get('blog_editor');
        $blogcreate->save();
        return redirect(route('blog'))->with(['success'=>'Successfully Inserted !']);
    }

    public function edit($id)
 {
     $editblog = Blog::find($id); 
     $blogss = Blog::all();
     return view('editblog',['editblog'=>$editblog,'blogss'=>$blogss]);
 }


 public function update(Request $request)
 {
    

    $validator = Validator::make(
        $request->all(),
        [
            //'blog_image' => ['required'],
         'title'=>['required'],
         'author_name'=>['required'],
         'publish_date'=>['required'],
         'blogs'=>['required'],
            
        ],
        [
           
           // 'blog_image.required' => 'Please enter Blog Image.',
            'title.required' => 'Please enter Title.',
            'author_name.required' => 'Please enter Author Name.',
            'publish_date.required' => 'Please enter Publish Date.',
            'blogs.required' => 'Please enter Blogs.',
           
        ]);
        if ($validator->fails()) {
            $errors = '';
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                $errors .= $message . "<br>";
            }
            return back()->with(['error'=>$errors]);
        }


    $updateblog=Blog::find($request->id);
    if($request->hasFile('blog_image')){
        $file= $request->file('blog_image');
        $filename=rand(0123,9999).time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images/'), $filename);
        $updateblog->blog_image= 'images/'.$filename;

    }
    $updateblog->title=$request->get('title');
        $updateblog->author_name=$request->get('author_name');
        $updateblog->publish_date=$request->get('publish_date');
        $updateblog->blogs=$request->get('blogs');
    // $updateblog->blogs=$request->get('blogs');
    $updateblog->save();
    // return redirect(route('blog')); 
 

     return redirect()->route('blog')->with(['success'=>true,'message'=>'Successfully Updated !']);
   
 }


 public function destroy($id)
 {
     $blogdelete=Blog::where('id',$id)->delete();
     return redirect(route('blog'));
 }

}

