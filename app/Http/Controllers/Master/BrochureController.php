<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Brochure;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BrochureController extends Controller
{
   public function index(){
    $brochure=Brochure::all();
    return view('Master.brochure',['brochure'=>$brochure]);
   }


   public function create(Request $request){

   
    $brochure=new Brochure;

    $filename='';
    if($request->hasFile('brochure_img')){
        $file= $request->file('brochure_img');
        $filename=rand(0123,9999).time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images/'), $filename);
        $brochure->brochure_img= 'images/'.$filename;

    }
    // $blogcreate->blog_image=$request->get('blog_image');
    
    // $blogcreate->title=$request->get('title');
 
    $brochure->save();
    return redirect(route('master.brochure'))->with(['success'=>'data inserted successfully.']);;
}
  public function edit($id)
 {
     $editblog = Brochure::find($id); 
     $blogss = Brochure::all();
     return view('Master.editbrochure',['editblog'=>$editblog,'blogss'=>$blogss]);
 }


 public function update(Request $request)
 {
    

    // $validator = Validator::make(
    //     $request->all(),
    //     [
    //         'blog_image' => ['required'],
    //      'title'=>['required'],
    
            
    //     ],
    //     [
           
    //         'blog_image.required' => 'Please enter Blog Image.',
    //         'title.required' => 'Please enter Title.',
      
           
    //     ]);
    //     if ($validator->fails()) {
    //         $errors = '';
    //         $messages = $validator->messages();
    //         foreach ($messages->all() as $message) {
    //             $errors .= $message . "<br>";
    //         }
    //         return back()->with(['error'=>$errors]);
    //     }


   

    $bro=Brochure::find($request->id);
    if($request->hasFile('brochure_img')){
        $file= $request->file('brochure_img');
        $filename=rand(0123,9999).time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images/'), $filename);
        $bro->brochure_img= 'images/'.$filename;


    }
    $bro->save();
    // return redirect(route('blog')); 
 

    //  return redirect()->route('master.brochure')->with(['success'=>true,'message'=>'Successfully Updated !']);
     return redirect(route('master.brochure'))->with(['success'=>'Successfully Updated !']);
 }


 public function destroy($id)
 {
     $blogdelete=Brochure::where('id',$id)->delete();
     return redirect(route('master.brochure'));
 }

}


