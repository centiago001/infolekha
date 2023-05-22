<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Classsses;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $cl = Classsses::all();
        return view('Master.class', ['cl'=>$cl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $cl= new Classsses;
        $cl->class=$request->get('class');
        $cl->save(); 
        return redirect(route('master.clsss'));
    }

   
   
    public function edit($id)
    {
        $cledit = Classsses::find($id); 
        $cla = Classsses::all();
        return view('Master.editclass',['cledit'=>$cledit,'cla'=>$cla]);
    }

  
    public function update(Request $request)
    {
        Classsses::where('id',$request->id)->update([ 'class'=>$request->class]);

        return redirect()->route('master.clsss')->with(['success'=>true,'message'=>'Successfully Updated !']);
      
    }

  
    public function destroy($id)
    {
        $cl=Classsses::where('id',$id)->delete();
        return redirect(route('master.clsss'));
    }
}
