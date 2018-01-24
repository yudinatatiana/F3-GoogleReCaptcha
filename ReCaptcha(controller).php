<?php
namespace Main;

class Controller {

    function __construct($f3){
    }

    public function gateway($f3){        
        
        if (isset($_POST['action'])){
            	$this->CheckReCaptcha($f3);
            }
        }
    }

    private function CheckReCaptcha($f3){

    	$captcha = $f3->get('captcha');
        $response=$f3->get('POST.g-recaptcha-response');
        // Check reCAPTCHA response against API
        $botcheck=$captcha->checkCaptcha($response);

        if ($botcheck['success']==1) {
            // Captcha passed - process form as normal
        }
        else {
        	// Captcha failed - handle as required
        	echo "Sorry, You are a robot";
            die();
        }
    }
    