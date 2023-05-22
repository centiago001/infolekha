<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\state;
use App\Models\Master\city;
use Illuminate\Http\Request;
use DB;
use Validator;


class state_city extends Controller
{
    public function state(Request $request) 
    {
        
        $inst=state::get();
        
        
        return view('Master.state',['data'=>$inst]);
    }

    public function state_create(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'state'=>"required|unique:state,state"
        ]);

        if($validator->fails()){
            return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        elseif($validator->passes()){
            $inst=state::create([
                'state'=>$request->get('state')
            ]);


        }
        
        return redirect()->back();
    }

    public function city(Request $request) 
    {
        $state_inst=state::get();
        $inst=DB::table('city')
        ->select("city.*","state.state")
        ->join('state','state.id','=','city.state_id')->get();
        
        return view('Master.city',['data'=>$inst,'state_data'=>$state_inst]);
    }
    public function city_create(Request $request) 
    {
        $validator=validator::make($request->all(),[
            'city'=>'required',
            'state'=>'required'
        ]);

        if($validator->fails()){
            return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        elseif($validator->passes()){
            $inst=city::create([
                'city'=>$request->get('city'),
                'state_id'=>$request->get('state')
            ]);


        }
        return redirect()->back();
    }



    public function getCities(Request $request)
{
    dd( $request->state_id);
    $cities = city::where('state_id', $request->state_id)->get();
    dd($cities);

    return response()->json($cities);
}
}
