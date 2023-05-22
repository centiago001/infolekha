<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Easebuzz;

use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use App\Models\transaction;
use Validator;


class Easebuzzpay extends Controller
{

    public function initiatePaymentAPI(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
        'amount'=>'required',
        

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
      if(auth::user()->role ==1){
        $data=DB::table('users')->join('school_institute_detail','school_institute_detail.user_id','=','users.id')
        ->select('users.*','school_institute_detail.*')->where('school_institute_detail.user_id',auth::user()->id)->first();
      }
      elseif(auth::user()->role ==2){
        $data=DB::table('users')->join('tutor_detail','tutor_detail.user_id','=','users.id')
        ->select('users.*','tutor_detail.*')->where('tutor_detail.user_id',auth::user()->id)->first();
      }
        $txnid='I-LEKHA' . time() . rand(001, 999);
        $it=new transaction;
        $it->name=$data->name;
        $it->mob=$data->mob;
        $it->address=$data->address;
        $it->user_id=auth::user()->id;
        $it->amount=$request->get('amount');
        $it->user_role=auth::user()->role;
        $it->transaction_id=$txnid;
        $it->transaction_status='NA';
        $it->save();


        $MERCHANT_KEY = env('MERCHANT_KEY', null);
        $SALT = env('SALT', null);
        $ENV = env('PAY_ENV', null);
        $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);
        $city=$data->address;
		$state=$data->address;
        $postData = array(
            "txnid" => $txnid,
            "amount" => $request->get('amount').'.00',
            "firstname" => str_replace(' ', '', $data->name),
            "email" => $data->email,
            "phone" => $data->mob,
            "productinfo" => "Sim card",
            "surl" => route('success'),
            "furl" => route('payfail'),
            "udf1" => auth::user()->role,
            "udf2" => "aaaa",
            "udf3" => "aaaa",
            "udf4" => "aaaa",
            "udf5" => "aaaa",
            "udf6" => "aaaa",
            "udf7" => "aaaa",
            "address1" => $data->address,
            "address2" => "aaaa",
            "city" =>'amravati',
            "state" => 'maharashtra',
            "country" => "aaaa",
            "zipcode" => $data->pin_code,
            
        );
        

        Session::put('newdata', $postData);
        Session::save();


      //  return redirect()->route('pay_success');
        $easebuzzObj->initiatePaymentAPI($postData);
        
        $SALT = env('SALT', null);
        $easebuzzObj = new Easebuzz($MERCHANT_KEY = null, $SALT, $ENV = null);
      
        $result = $easebuzzObj->easebuzzResponse();
       
    }  
    }
}
