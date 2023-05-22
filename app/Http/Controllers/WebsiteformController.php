<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_student;
use App\Models\user_school_institute;
use App\Models\user_tutor;
use App\Models\Student_detail;
use App\Models\school_institute_detail;
use App\Models\tutor_detail;
use App\Models\transaction;
use App\Models\Anouncement;
use App\Models\Contact_Us;
use App\Models\Master\city;
use App\Models\Master\state;
use App\Models\Master\Entity;
use App\Models\Master\School;
use App\Models\Master\College;
use App\Models\Master\Institute;
use App\Models\Master\Cources;
use App\Models\Master\Faculties;

use App\Models\CollegelistingEnquiry;
use DB;
use Hash;
use Session;
use App\Models\User;
use Auth;
use Validator;

class WebsiteformController extends Controller


{


    public function dashboard()
    {
        $student_data = DB::table('users')->select('users.*','user_student.*')

    ->join('user_student', 'user_student.user_id', '=', 'users.id')
    ->get();

    $student_data_count = DB::table('users')->select('users.*','student_detail.*','user_student.*')
    ->join('user_student', 'user_student.user_id', '=', 'users.id')
    ->count();


        $tutor_data = DB::table('users')->select('users.*','tutor_detail.*','user_tutor.*')
    ->join('tutor_detail', 'tutor_detail.user_id', '=', 'users.id')
    ->join('user_tutor', 'user_tutor.user_id', '=', 'users.id')->where('subscription_status',1)
    ->get();

    $tutor_data_count = DB::table('users')->select('users.*','tutor_detail.*','user_tutor.*')
    ->join('tutor_detail', 'tutor_detail.user_id', '=', 'users.id')
    ->join('user_tutor', 'user_tutor.user_id', '=', 'users.id')->where('subscription_status',1)
    ->count();

        $school_institute_data = DB::table('users')->select('users.*','school_institute_detail.*','user_school_institute.*')
    ->join('school_institute_detail', 'school_institute_detail.user_id', '=', 'users.id')
    ->join('user_school_institute', 'user_school_institute.user_id', '=', 'users.id')->where('subscription_status',1)
    ->get();
    
    $school_data_count = DB::table('users')->select('users.*','school_institute_detail.*','user_school_institute.*')
    ->join('school_institute_detail', 'school_institute_detail.user_id', '=', 'users.id')
    ->join('user_school_institute', 'user_school_institute.user_id', '=', 'users.id')->where('subscription_status',1)->where('r_entity',"school")
    ->count();

    $college_data_count = DB::table('users')->select('users.*','school_institute_detail.*','user_school_institute.*')
    ->join('school_institute_detail', 'school_institute_detail.user_id', '=', 'users.id')
    ->join('user_school_institute', 'user_school_institute.user_id', '=', 'users.id')->where('subscription_status',1)->where('r_entity',"College")
    ->count();

  
    $institute_data_count = DB::table('users')->select('users.*','school_institute_detail.*','user_school_institute.*')
    ->join('school_institute_detail', 'school_institute_detail.user_id', '=', 'users.id')
    ->join('user_school_institute', 'user_school_institute.user_id', '=', 'users.id')->where('subscription_status',1)->where('r_entity',"Institute")
    ->count();
 
        return view('dashboard',['tutor_data'=>$tutor_data, 'student_data'=>$student_data,'school_institute_data'=>$school_institute_data,'tutor_data_count'=>$tutor_data_count, 'student_data_count'=>$student_data_count, 'institute_data_count'=>$institute_data_count,'college_data_count'=>$college_data_count,'school_data_count'=>$school_data_count]);
    }



   
     public function student_register_form()
        {
		 $city=city::get();
		  $state=state::get();
            return view('Website.student_register_form',['citys'=> $city,'states'=> $state]);
        }
    

    public function student_register_user_create(Request $request)

        {
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:255',
            'current_school_institute' => 'required|string|max:255',
            'mob'=>'required|max:10|unique:user_student',
            'email' => 'required|string|email|max:255',//|unique:users
            'password' => 'required|string|min:6|confirmed'
            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {
                

 $users3=User::create([
                    'name'=>$request->get('name'),
                    'password'=>Hash::make($request->get('password')),
                    'email'=>$request->get('email'),
                    'active'=>1,
                    'role'=>3,

                ]);
                


                $inst=user_student::create([
                                            'r_name'=>$request->get('name'),
                                            'r_current_school_institute'=>$request->get('current_school_institute'),
                                            'mob'=>$request->get('mob'),
                                            'address'=>$request->get('address'),                                        
                                            'user_id'=>$users3->id,
                                            

                                                            ]);    
                                                            Auth::attempt(array('email' => $request->email, 'password' => $request->password));
           
                                                            $data=Auth::user()->id;
                                                               return redirect()->route('college_listing',$data);
                
            }

        }
        
    }

    
 public function student_detail_form(Request $request){
    $data= user_student::find($request->data);
    return view('Website.student_details_form')->with('data',$data);
 }


    public function student_detail_create(Request $request)

    {

        
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:255',
            'class'=>'required',
            'mob'=>'required|max:10',
            'email' => 'required|string|email|max:255|unique:student_detail', //|unique:student_detail
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {
                
                if (Student_detail::where('user_student_id',$request->data)->exists()){
                    return  redirect()->back();
                }

                $image= time().'.'.$request->file('image')->getClientOriginalExtension();
                $request->image->move(public_path('database_files/student/photo',$image));
                
                $inst= Student_detail::create([
                                            'name'=>$request->get('name'),
                                            'class'=>$request->get('class'),
                                            'mob'=>$request->get('mob'),
                                            'email'=>$request->get('email'),
                                            'address'=>$request->get('address'),
                                            'state'=>$request->get('state'),
                                            'city'=>$request->get('city'),
                                            'pin_code'=>$request->get('pin_code'),
                                            'image'=>'database_files/student/photo/'.$image,
                                            'user_student_id'=>$request->data
                          
                                            

                ]);
                return redirect('college_listing');
                
            }

        }
        
    }

















// ------------------------------------------------school institute form controller function---------------------------------------------//





    public function school_institute_register_form()
    {
		$city=city::get();
		$state=state::get();
		$Entity=Entity::get();
        return view('Website.school_institute_register_form',['citys'=> $city,'states'=> $state,'entitys'=> $Entity]);
    }
    

    public function school_institute_register_user_create(Request $request)

    {
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'r_mob'=>'required|min:10|max:10|unique:user_school_institute',
            'email' => 'required|string|email|max:255|unique:users',//
            'password' => 'required|string|min:6|confirmed',
			'entity'=>'required'
            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {
                
                
                $users1=User::create([
                    'name'=>$request->get('name'),
                    'password'=>Hash::make($request->get('password')),
                    'email'=>$request->get('email'),
                    'active'=>0,
                    'role'=>1,

                ]);

                $inst=user_school_institute::create([
                                            'r_name'=>$request->get('name'),
                                            'r_contact_person'=>$request->get('contact_person'),
                                            'r_mob'=>$request->get('r_mob'),
                                            'address'=>$request->get('address'),
                                            'user_id'=>$users1->id,
					                         'r_entity'=>$request->get('entity'),
                                                ]); 
                                                            
                
                Auth::attempt(array('email' => $request->email, 'password' => $request->password));
                return redirect()->route('school_institute_detail_form',['data'=>Auth::user()->id]);

                
            }

        }
        
    }

    
 public function school_institute_detail_form(Request $request){
    $schools=School::get();
    $colleges=College::get();
    $institutes=Institute::get();
    $courses=Cources::get();
    $facalitys=Faculties::get();

	     $data= DB::table('users')->join('user_school_institute','user_school_institute.user_id','=','users.id')
		 ->select('users.*','user_school_institute.*')->where('user_school_institute.user_id',auth::user()->id)->first();
	 


    return view('Website.school_institute_details_form',['data'=>$data,
                                                            'schools'=>$schools,
                                                            'colleges'=>$colleges,
                                                            'institutes'=>$institutes,
                                                            'courses'=>$courses,
                                                            'facalitys'=>$facalitys
                                                        ]);
 }


    public function school_institute_detail_create(Request $request)

    {

        
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
           'logo'=>'required',
            'school_institute'=>'required',
            'address'=>'required',
            //'about'=>'required',
            'pin_code'=>'required',
            'oprating_since'=>'required',
            //'registration_no'=>'required',
            'mob'=>'required|max:10',
            'email'=>'required|email|max:255', //
            //'website'=>'required',
            //'fb'=>'required',
            //'insta'=>'required',
            //'google'=>'required',
            //'yt'=>'required',
            'course'=>'required',
            //'opening_time'=>'required',
            //'closing_time'=>'required',
            'facilities'=>'required',
            // 'image'=>'required',
            // 'video'=>'required',
           
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {
				
                if (school_institute_detail::where('user_id',auth::user()->id)->exists()){
                    dd(auth::user()->id);
                    return  redirect()->back();
                }
				
                $test=user_school_institute::where('user_id',auth::user()->id)->first();
              
					$inst= new school_institute_detail();
               if( $request->image){
				   $array_image=[];
			    foreach($request->image as $images)
			   {
				$image= time().'.'.$images->getClientOriginalExtension();
                $images->move(public_path('database_files/school_institute/photo'),$image);
				 array_push($array_image,'database_files/school_institute/photo/'.$image);
				   
			   }
				   $image_name=json_encode($array_image);
			   }
              
				 if( $request->image){
					 $array_video=[];
				foreach($request->video as $videos){
			    $video= time().'.'.$videos->getClientOriginalExtension();
                $videos->move(public_path('database_files/school_institute/video'),$video);
					array_push($array_video,'database_files/school_institute/video/'.$video);
				}
					 $video_name=json_encode($array_video);
				 }

                
				

                //$video= time().'.'.$request->file("video")->GetClientOriginalName();
                //$request->video->move(base_path('database_files/school_institute/video'),$video);

                $logo= time().'.'.$request->file("logo")->getClientOriginalExtension();
                $request->logo->move(public_path('database_files/school_institute/logo'),$logo);
    
                $course= json_encode($request->get('course'));
				$facilities= json_encode($request->get('facilities'));
                
				
			
				 
                
                                            $inst->entity_name=$request->get('school_institute');
                                            $inst->address=$request->get('address');
                                            $inst->about=$request->get('about');
                                            $inst->pin_code=$request->get('pin_code');
                                            $inst->oprating_since=$request->get('oprating_since');
                                            $inst->registration_no=$request->get('registration_no');
                                            $inst->mob=$request->get('mob');
                                            $inst->email=$request->get('email');
                                            $inst->website=$request->get('website');
                                            $inst->fb=$request->get('fb');
                                            $inst->insta=$request->get('insta');
                                            $inst->google=$request->get('google');
                                            $inst->yt=$request->get('yt');
											
											if($test->r_entity=='School'){
                                            $inst->entity_select=$request->get('school');}
											elseif($test->r_entity=='College'){
                                            $inst->entity_select=$request->get('college');
											}
											elseif($test->r_entity=='Institute'){
                                            $inst->entity_select=$request->get('institute');
											}
											
                                            $inst->course=$course;
                                            $inst->opening_time=$request->get('opening_time');
                                            $inst->closing_time=$request->get('closing_time');
                                            $inst->facilities=$facilities;
                                            if( $request->image){$inst->image=$image_name;}
                                            if( $request->video){$inst->video=$video_name;}
                                            $inst->logo='database_files/school_institute/logo/'.$logo;
                                            //$inst->declaration=$request->get('declaration');
                                            $inst->user_id= auth::user()->id;
				                            $inst->subscription_status=0;
				                            $inst->activate=0;
											
											$inst->save();
                return redirect('payment_form');
                
            }

        }
        
    }




























    // --------------------------------------------------------------------tutor form controller------------------------------------------//
    
    

   
   
    public function tutor_register_form()
    {
		
        return view('Website.tutor_register_form');
    }
    

    public function tutor_register_user_create(Request $request)

    {
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:255',
            'mob'=>'required|min:10|max:10|unique:user_tutor',
            'email' => 'required|string|email|max:255|unique:users',//|unique:users
            'password' => 'required|string|min:6|confirmed'
            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {
                $users2=User::create([
                    'name'=>$request->get('name'),
                    'password'=>Hash::make($request->get('password')),
                    'email'=>$request->get('email'),
                    'active'=>0,
                    'role'=>2,

                ]);
                


                $inst=user_tutor::create([
                                            'r_name'=>$request->get('name'),
                                            'mob'=>$request->get('mob'),
					                          'address'=>$request->get('address'),
                        
                                        
                                            'user_id'=>$users2->id,
                                            

                                                            ]);                                                 
                
                Auth::attempt(array('email' => $request->email, 'password' => $request->password));
                $data=auth::user()->id;
                return redirect()->route('tutor_detail_form',$data);

                
            }

        }
        
    }

    
 public function tutor_detail_form(Request $request){
    
    $data= DB::table('users')->join('user_tutor','user_tutor.user_id','=','users.id')
    ->select("user_tutor.*","users.*")->where('user_tutor.user_id',auth::user()->id)->first();
   

    return view('Website.tutor_details_form',['data'=>$data]);
 }


    public function tutor_detail_create(Request $request)

    {
        
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:255',
            'experiance'=>'required',
            'subject'=>'required',
            'mob'=>'required|max:10',
            'email' => 'required|string|email|max:255', //|unique:tutor_detail
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {


                if (tutor_detail::where('user_id',auth::user()->id)->exists()){
                    return  redirect()->back();
                }
                
                
                $inst= tutor_detail::create([
                                            'name'=>$request->get('name'),
                                            'subject'=>$request->get('subject'),
                                            'experiance'=>$request->get('experiance'),
                                            'job_type'=>$request->get('job_type'),
                                            'mob'=>$request->get('mob'),
                                            'email'=>$request->get('email'),
                                            'address'=>$request->get('address'),
                                            'pin_code'=>$request->get('pin_code'),
                                            'declaration'=>$request->get('declaration'),
                                            'user_id'=>auth::user()->id,
                                            'subscription_status'=> 0,
                                            'activate'=> 0

                          
                                            

                ]);
                return redirect('payment_form');
                
            }

        }
        
    }

    public function student_detail_update(request $request){
        {

        
            if ($request->isMethod('post')){
    
                $validator = Validator::make($request->all(),
                [
                'name' => 'required|string|max:255',
                'class'=>'required',
                'mob'=>'required|max:10',
                'email' => 'required|string|email|max:255', //|unique:student_detail
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
                ]);
    
                if ($validator->fails())
                {
                    //  return redirect()->back()->with('error',$validator->errors());
                    return  redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
                }
             
                if ($validator->passes())
                {
                    
    
                    $image= time().'.'.$request->file('image')->getClientOriginalExtension();
                    $request->image->move(public_path('database_files\student\photo'),$image);
                    
                    $inst= Student_detail::where("id",$request->data)->update([
                                                                                'name'=>$request->get('name'),
                                                                                'class'=>$request->get('class'),
                                                                                'mob'=>$request->get('mob'),
                                                                                'email'=>$request->get('email'),
                                                                                'address'=>$request->get('address'),
                                                                                'state'=>$request->get('state'),
                                                                                'city'=>$request->get('city'),
                                                                                'pin_code'=>$request->get('pin_code'),
                                                                                'image'=>$image,
                                                                                'user_student_id'=>$request->user_student_id
                                                            
                                                                                
                                    
                                                    ]);
                    return redirect()->route('login');
                    
                }
    
            }
            
        }
    
       
     
    }
    


    public function school_institute_detail_upload(Request $request)

    {

        
        if ($request->isMethod('post')){

            $validator = Validator::make($request->all(),
            [
            'school_institute'=>'required',
            'address'=>'required',
            'about'=>'required',
            'pin_code'=>'required',
            'oprating_since'=>'required',
            'registration_no'=>'required',
            'mob'=>'required|max:10',
            'email'=>'required|email|max:255', //
            'website'=>'required',
            'fb'=>'required',
            'insta'=>'required',
            'google'=>'required',
            'yt'=>'required',
            'school'=>'required',
            'college'=>'required',
            'institute'=>'required',
            'course'=>'required',
            'opening_time'=>'required',
            'closing_time'=>'required',
            'facilities'=>'required',
            // 'image'=>'required',
            // 'video'=>'required',
            'declaration'=>'required'
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            if ($validator->fails())
            {
                //  return redirect()->back()->with('error',$validator->errors());
                return  redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
         
            if ($validator->passes())
            {
                if (school_institute_detail::where('user_school_institute_id',$request->data)->exists()){
                    return  redirect()->back();
                }

            
                //
                $image= time().'.'.$request->file('image')->getClientOriginalExtension();
                $request->image->move(public_path('database_files\school_institute\photo'),$image);

                $video= time().'.'.$request->file("video")->GetClientOriginalName();
                $request->video->move(public_path('database_files\school_institute\video'),$video);
    
                
                
                $inst= school_institute_detail::create([
                                            'school_institute'=>$request->get('school_institute'),
                                            'address'=>$request->get('address'),
                                            'about'=>$request->get('about'),
                                            'pin_code'=>$request->get('pin_code'),
                                            'oprating_since'=>$request->get('oprating_since'),
                                            'registration_no'=>$request->get('registration_no'),
                                            'mob'=>$request->get('mob'),
                                            'email'=>$request->get('email'),
                                            'website'=>$request->get('website'),
                                            'fb'=>$request->get('fb'),
                                            'insta'=>$request->get('insta'),
                                            'google'=>$request->get('google'),
                                            'yt'=>$request->get('yt'),
                                            'school'=>$request->get('school'),
                                            'college'=>$request->get('college'),
                                            'institute'=>$request->get('institute'),
                                            'course'=>$request->get('course'),
                                            'opening_time'=>$request->get('opening_time'),
                                            'closing_time'=>$request->get('closing_time'),
                                            'facilities'=>$request->get('facilities'),
                                            'image'=>$image,
                                            'video'=>$video,
                                            'declaration'=>$request->get('declaration'),
                                            'user_school_institute_id'=> $request->user_school_institute_id
                          
                                            

                ]);
                return redirect()->route('school_institute_register_form');
                
            }

        }
        
    }





    public function index(){
        $state=state::get();

        $anu=Anouncement::get();
        return view('Website.index',['state'=>$state,'anu'=>$anu]);
    }




    public function index_contact()
    {

        return view('Website.contact-us');
    
    }

    public function create_contact(Request $request){
        $contact=new Contact_Us;
        $contact->name=$request->get('name');
        $contact->email=$request->get('email');
        $contact->phone=$request->get('phone');
        $contact->message=$request->get('message');
        $contact->save(); 
        return redirect(route('web_contacts'));
    }


    public function event(){
   
        return view('Website.event');
    }

    public function coming_soon(){
   
        return view('Website.coming_soon');
    }


    public function anouncement(Request $request){

       $inst=user_student::where('r_city',$request->city);
       $inst1=user_student::where('r_city',$request->city);

   
        return response()->json(['status'=>true,'data'=>$inst ,'second'=>$inst1]);
    }

    public function announwebs(Request $request){
        $anu=Anouncement::where('id',$request->id)->first();
        // echo json_encode($anu);
        // exit();
        return view('Website.announcementweb',['anu'=>$anu]);
    }
	
	
    public function college_listing(Request $request){
        //     User::find(1)->update(['password'=>Hash::make(123456)]);
        //    $auth=Auth::attempt(array('email' => 'lehigu@mailinator.com', 'password' =>123456));
           
    
            $college_list=school_institute_detail::where('activate','1')
            ->where('subscription_status','1')
            ->get();
         //    echo json_encode($college_list);
         //    exit();
     
            return view('Website.college_listing',['college_list'=>$college_list]);
        
    }
    
        public function post_enquiry(Request $request){
            $contact=new CollegelistingEnquiry;
            $contact->name=$request->get('name');
            $contact->email=$request->get('email');
            $contact->mobile_no=$request->get('mobile_no');
            $contact->message=$request->get('message');
            $contact->save(); 
            return redirect()->back();
        }



        public function log_out()
        {
           Auth::logout();
          return redirect()->route('index');
        }
    

	
	public function send_mobile_verify_otp(Request $request)
    {
      $otp = rand(1000, 9999);
      $name = 'customer';
      $msg = 'Dear ' . $name . ', Please enter this OTP ' . $otp . '. to verify your account. Thank you for choosing INFOlekha.org.';
      $msg = urlencode($msg);
      $to = $request->mob;
      //$user->mobile;
      // $request->mobile;
      $data1 = "uname=habitm1&pwd=habitm1&senderid=ILEKHA&to=" .
          $to . "&msg=" . $msg .
          "&route=T&peid=1701168292124454704&tempid=1707168309589390057";
      $ch = curl_init('http://bulksms.webmediaindia.com/sendsms?');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      curl_close($ch);
      return response()->json($otp);
  }

  public function val_form(Request $request)
    {

        if (user_student::where('mob',$request->mob)->exists()){
            return response()->json(['status'=>false]);
        }
        elseif (user_school_institute::where('r_mob',$request->mob)->exists()){
            return response()->json(['status'=>false]);
        }
       elseif (user_tutor::where('mob',$request->mob)->exists()){
            return response()->json(['status'=>false]);
        }
        else{
            return response()->json(['status'=>true]);
        
        }
        
            

  }
  


  public function activation(Request $request)
  {

      if($request->action =='Activate'){

        $user_for_activation = User::where('id',$request->id)->first();
        $user_for_activation->update(['active'=>1]);
        if($user_for_activation->role == 1){
            school_institute_detail::where('user_id',$user_for_activation->id)->update(['activate'=>1]);
        }
        elseif($user_for_activation->role == 2){
            tutor_detail::where('user_id',$user_for_activation->id)->update(['activate'=>1]);
        };
        
        return response()->json(['status'=>'true', 'action'=>$request->action,'val'=>$check_role->id]);
      }
      elseif($request->action =='Deactivate'){
        $user_for_activation = User::where('id',$request->id)->first();
        $user_for_activation->update(['active'=>0]);
        if($user_for_activation->role == 1){
            school_institute_detail::where('user_id',$user_for_activation->id)->update(['activate'=>0]);
        }
        elseif($user_for_activation->role == 2){
            tutor_detail::where('user_id',$user_for_activation->id)->update(['activate'=>0]);
        };
        return response()->json(['status'=>'true', 'action'=>$request->action]);
      }
    else{
      return response()->json(['status'=>'undefine']);
    }
            

}
	
	  public function about_us(Request $request){
   
        return view('Website.about');
    }
	
	
	public function privacy_policy(Request $request){
   
        return view('Website.privacy_policy');
    }
	public function term(Request $request){
   
        return view('Website.term');
    }
	
	public function refund(Request $request){
   
        return view('Website.refund');
    }
	
	
	public function blog(Request $request){
   
        return view('Website.blog');
    }
	
	
	
	
	
	 public function payfail()
  {
    transaction::where('transaction_id',$request->txnid)->update([
        'transaction_status'=>$request->status,
    ]);
    
    
      return view('Website.payfail');
  }


    public function success(Request $request)
  {
  
        
  
    if($request->udf1 == 1){
        DB::table('transaction')->join('school_institute_detail','school_institute_detail.user_id','=','transaction.user_id')
         ->where('transaction.transaction_id',$request->txnid)->update([
            'school_institute_detail.subscription_status'=>1,
            'transaction.transaction_status'=>$request->status

        ]);
    }
    
    
    elseif($request->udf1 == 2){
        DB::table('transaction')->join('tutor_detail','tutor_detail.user_id','=','transaction.user_id')
         ->where('transaction.transaction_id',$request->txnid)->update([
            'tutor_detail.subscription_status'=>1,
            'transaction.transaction_status'=>$request->status

        ]);
    }

    
			return view('Website.success');

         

  
}
	
	
	public function payment_form(Request $request)
  {
        
            return view('Website.payment_form');		
  
}
	
	

 public function role(Request $request)
  {
        
            return view('Website.role-blog-5');		
  
}   


 public function opportunites(Request $request)
  {
        
            return view('Website.opportunites-after-10th-blog-1');		
  
}   
 public function choosing(Request $request)
  {
        
            return view('Website.choosing-carrier-blog2');		
  
}
	public function stratigic(Request $request)
  {
        
            return view('Website.choosing-carrier-blog2');		
  
}
		public function benifite(Request $request)
  {
        
            return view('Website.benifite');		
  

}
}
