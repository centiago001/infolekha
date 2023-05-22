<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Faculties;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    public function index()
    {
        $cl = Faculties::all();
        return view('Master.faculties', ['cl'=>$cl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $cl= new Faculties;
        $cl->faculti=$request->get('faculti');
        $cl->save(); 
        return redirect(route('master.faculti'));
    }

   
   
    public function edit($id)
    {
        $cledit = Faculties::find($id); 
        $cla = Faculties::all();
        return view('Master.editfaculti',['cledit'=>$cledit,'cla'=>$cla]);
    }

  
    public function update(Request $request)
    {
        Faculties::where('id',$request->id)->update([ 'faculti'=>$request->faculti]);

        return redirect()->route('master.faculti')->with(['success'=>true,'message'=>'Successfully Updated !']);
      
    }

  
    public function destroy($id)
    {
        $cl=Faculties::where('id',$id)->delete();
        return redirect(route('master.faculti'));
    }

}
