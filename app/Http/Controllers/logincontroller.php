<?php

namespace App\Http\Controllers;
use App\Models\user_student;
use App\Models\user_school_institute;
use App\Models\user_tutor;
use App\Models\User;
use App\Models\Student_detail;
use App\Models\school_institute_detail;
use App\Models\tutor_detail;
use Hash;
use Auth;
use DB;

use Illuminate\Http\Request;

class logincontroller extends Controller
{

    public function login()
    {
        
        return view('Website.login');
    }
   
    public function login_submit(Request $request){
       
        $user=User::get();
        Auth::logout();
        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))) { 
            if(Auth::user()->role == 3){
       
                $int= DB::table('users')->join('user_student','user_student.user_id','=','users.id')
                ->join('student_detail','student_detail.user_id','=','users.id')
                ->select('users.*','user_student.*','student_detail.*')
                ->where('users.id',Auth::user()->id)->first();
                $data=auth::user()->id;
                return redirect()->route('college_listing',$data);

            }

            elseif(Auth::user()->role == 2){
                $int= DB::table('users')->join('user_tutor','user_tutor.user_id','=','users.id')
                ->join('tutor_detail','tutor_detail.user_id','=','user_tutor.user_id')
                ->select('users.*','user_tutor.*','tutor_detail.*')
                ->where('users.id',Auth::user()->id)->first();
                if ($int == null){
                    $data= DB::table('users')->join('user_tutor','user_tutor.user_id','=','users.id')
		 ->select('users.*','user_tutor.*')->where('user_tutor.user_id',auth::user()->id)->first();
                    return view('Website.tutor_details_form',['data'=>$data]);}

                return view('Website.tutor_detail_edit',['data'=>$int]);

                
            }


            elseif(Auth::user()->role == 1){

                $int= DB::table('users')->join('user_school_institute','user_school_institute.user_id','=','users.id')
                ->join('school_institute_detail','school_institute_detail.user_id','=','users.id')
                ->select('users.*','user_school_institute.*','school_institute_detail.*')
                ->where('users.id',Auth::user()->id)->first();
                if ($int == null){
                    $data= DB::table('users')->join('user_school_institute','user_school_institute.user_id','=','users.id')
		 ->select('users.*','user_school_institute.*')->where('user_school_institute.user_id',auth::user()->id)->first();
                    return view('Website.school_institute_details_form',['data'=>$data]);}
            
                return view('Website.school_institute_detail_edit',['data'=>$int]);

                
            }

            
        }



        else{
            // echo "error','Invalid Login Credentials.";
            
             return redirect()->back()->with('error','Invalid Login Credentials.');  
               }
         
          //return view('login_page',compact('gallery'));
         }
         public function log_out()
         {
            Auth::logout();
           
           return redirect()->route('login_page');
         }
     }