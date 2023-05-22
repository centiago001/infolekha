<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Jobtype;
use Illuminate\Http\Request;

class JobtypeController extends Controller
{
    public function index()
    {
        $cl = Jobtype::all();
        return view('Master.job-type', ['cl'=>$cl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $cl= new Jobtype;
        $cl->job=$request->get('job');
        $cl->save(); 
        return redirect(route('master.job'));
    }

   
   
    public function edit($id)
    {
        $cledit = Jobtype::find($id); 
        $cla = Jobtype::all();
        return view('Master.editjob',['cledit'=>$cledit,'cla'=>$cla]);
    }

  
    public function update(Request $request)
    {
        Jobtype::where('id',$request->id)->update([ 'job'=>$request->job]);

        return redirect()->route('master.job')->with(['success'=>true,'message'=>'Successfully Updated !']);
      
    }

  
    public function destroy($id)
    {
        $cl=Jobtype::where('id',$id)->delete();
        return redirect(route('master.job'));
    }

}
