<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact_Us;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index()
        {
            $cont = Contact_Us::all();
            return view('contact', ['cont'=>$cont]);
        }

        public function destroy($id)
        {
            $cl=Contact_Us::where('id',$id)->delete();
            return redirect(route('contacts'));
        }
    
	
	 public function mail(Request $request)
        {4
			
			
			
			
          
		 $lst=['name'=>$request->get('name'),
'email'=>$request->get('email'),'phone_no'=>$request->get('mob'),'msg'=>$request->get('msg')];

Mail::send('Website.mail', $lst,function($message){
    $message->to('shivanidakare22@gmail.com', 'testing')->subject('equery');
    $message->from('sharique.aspect@gmail.com'
				  );
   
});
		 
 return redirect()->back();
        }

}
//     public function index()
//     {
//         $cl = College::all();
//         return view('Master.college', ['cl'=>$cl]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create(Request $request)
//     {
        
//         $cl= new College;
//         $cl->colege=$request->get('colege');
//         $cl->save(); 
//         return redirect(route('master.college'));
//     }

   
   
//     public function edit($id)
//     {
//         $cledit = College::find($id); 
//         $cla = College::all();
//         return view('master.editcollege',['cledit'=>$cledit,'cla'=>$cla]);
//     }

  
//     public function update(Request $request)
//     {
//         College::where('id',$request->id)->update([ 'colege'=>$request->colege]);

//         return redirect()->route('master.college')->with(['success'=>true,'message'=>'Successfully Updated !']);
      
//     }

  
//     public function destroy($id)
//     {
//         $cl=College::where('id',$id)->delete();
//         return redirect(route('master.college'));
//     }

// }
