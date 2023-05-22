<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master\Entity;

class EntityController extends Controller
{
    public function index()
    {
        $cl = Entity::all();
        return view('Master.add-entity', ['cl'=>$cl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $cl= new Entity;
        $cl->entity=$request->get('entity');
        $cl->save(); 
        return redirect(route('master.entity'));
    }

   
   
    public function edit($id)
    {
        $cledit = Entity::find($id); 
        $cla = Entity::all();
        return view('Master.editentity',['cledit'=>$cledit,'cla'=>$cla]);
    }

  
    public function update(Request $request)
    {
        Entity::where('id',$request->id)->update([ 'entity'=>$request->entity]);

        return redirect()->route('master.entity')->with(['success'=>true,'message'=>'Successfully Updated !']);
      
    }

  
    public function destroy($id)
    {
        $cl=Entity::where('id',$id)->delete();
        return redirect(route('master.entity'));
    }

}
