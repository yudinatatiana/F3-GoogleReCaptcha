<?php

$f3->config('config.ini');

require('lib/ReCaptcha.php');
$captcha=new ReCaptcha();
$f3->set('captcha', $captcha);