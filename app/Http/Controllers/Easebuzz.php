<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Easebuzz extends Controller
{

        private $MERCHANT_KEY = "";
        private $SALT = "";
        private $ENV = "";

        /*
        * initialised private variable for setup easebuzz payment gateway.
        *
        * @param  string $key - holds the merchant key.
        * @param  string $salt - holds the merchant salt key.
        * @param  string $env - holds the env(enviroment). 
        *
        */

        function __construct($key, $salt, $env){
            $this->MERCHANT_KEY = $key;
            $this->SALT = $salt;
            $this->ENV = $env;
        }


        public function initiatePaymentAPI($params, $redirect=True){
            // include file
          
            include_once('payment.php');

            // generate transaction ID and push into $params array
            // $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            // $params['txnid'] = $txnid;
            return initiate_payment($params, $redirect, $this->MERCHANT_KEY, $this->SALT, $this->ENV);
        }

     


       
        public function easebuzzResponse($params){
            // echo json_encode($params);
            // return;
            // include file
            include_once('payment.php');

            $result = responses($params, $this->SALT);

            return json_encode($result);
        }

    } 
?>