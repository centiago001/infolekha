<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\Slider;

use Illuminate\Http\Request;

class SliderlinkController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        return view('Master.sliderlink',['sliders'=>$sliders]);
       }


       public function create(Request $request){

        $validator = Validator::make(
            $request->all(),
            [
                'slider' => ['required'],
                'link' => ['required'],
           
            ],
            [
               
                'slider.required' => 'Please enter Slider Image.', 
                'link.required' => 'Please enter Link.', 
            ]);
            if ($validator->fails()) {
                $errors = '';
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    $errors .= $message . "<br>";
                }
                return back()->with(['error'=>$errors]);
            }
    
        $brochure=new Slider;
    
        $filename='';
        if($request->hasFile('slider')){
            $file= $request->file('slider');
            $filename=rand(0123,9999).time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/'), $filename);
            $brochure->slider= 'images/'.$filename;
    
        }
        // $blogcreate->blog_image=$request->get('blog_image');
        $brochure->link=$request->get('link');
        // $blogcreate->title=$request->get('title');
     
        $brochure->save();
        return redirect(route('master.slider'))->with(['success'=>'data inserted successfully.']);;
    }
      public function edit($id)
     {
         $editblog = Slider::find($id); 
         $blogss = Slider::all();
         return view('Master.editsliderlink',['editblog'=>$editblog,'blogss'=>$blogss]);
     }
    
    
     public function update(Request $request)
     {
        
    
        $validator = Validator::make(
            $request->all(),
            [
              
             'link'=>['required'],
        
                
            ],
            [
            
                'link.required' => 'Please enter Link.',
          
               
            ]);
            if ($validator->fails()) {
                $errors = '';
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    $errors .= $message . "<br>";
                }
                return back()->with(['error'=>$errors]);
            }
    
    
       
    
        $bro=Slider::find($request->id);
        if($request->hasFile('slider')){
            $file= $request->file('slider');
            $filename=rand(0123,9999).time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/'), $filename);
            $bro->slider= 'images/'.$filename;
    
    
        }
        $bro->link=$request->get('link');
        $bro->save();
        // return redirect(route('blog')); 
     
    
        //  return redirect()->route('master.brochure')->with(['success'=>true,'message'=>'Successfully Updated !']);
         return redirect(route('master.slider'))->with(['success'=>'Successfully Updated !']);
     }
    
    
     public function destroy($id)
     {
         $blogdelete=Slider::where('id',$id)->delete();
         return redirect(route('master.slider'));
     }
    }    