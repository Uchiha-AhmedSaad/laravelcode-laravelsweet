<?php 

use Laravelcode\LaravelSweet\Classes\SweetAlertHelper;

	if (!function_exists('Sweet_Session_fired')) {
		function Sweet_Session_fired()
		{
			return session()->forget(['Flash_message','title','icon','timer','text']);
		}
	}
	if (!function_exists('SweetFlash')) {

		function SweetFlash($element,$method,$status = "success",$time = 5000)
		{
			return new SweetAlertHelper($element,$method,$status,$time);
		}
	}





 ?>