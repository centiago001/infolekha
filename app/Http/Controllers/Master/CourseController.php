<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Cources;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $cl = Cources::all();
        return view('Master.cources', ['cl'=>$cl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $cl= new Cources;
        $cl->course=$request->get('course');
        $cl->save(); 
        return redirect(route('master.course'));
    }

   
   
    public function edit($id)
    {
        $cledit = Cources::find($id); 
        $cla = Cources::all();
        return view('Master.editcourse',['cledit'=>$cledit,'cla'=>$cla]);
    }

  
    public function update(Request $request)
    {
        Cources::where('id',$request->id)->update([ 'course'=>$request->course]);

        return redirect()->route('master.course')->with(['success'=>true,'message'=>'Successfully Updated !']);
      
    }

  
    public function destroy($id)
    {
        $cl=Cources::where('id',$id)->delete();
        return redirect(route('master.course'));
    }

}
