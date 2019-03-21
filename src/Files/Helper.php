<?php 

use Laravelcode\LaravelSweet\Classes\SweetAlertHelper;

	if (!function_exists('Sweet_Session_fired')) {
		function Sweet_Session_fired()
		{
			session()->forget(['Flash_message','title','icon','timer','text']);
			session_write_close ();
		}
	}
	if (!function_exists('SweetFlash')) {

		function SweetFlash($element,$method,$status = "success",$time = 5000)
		{
			return new SweetAlertHelper($element,$method,$status,$time);
		}
	}
	
	if (!function_exists('sweetElement')) 
	{
		function sweetElement($param)
		{
			if ($param == 'Flash_message') {
				return Session::get('Flash_message');
			}
			if ($param == 'title') {
				return Session::get('title');
			}
			if ($param == 'timer') {
				return Session::get('timer');
			}
			if ($param == 'text') {
				return Session::get('text');
			}
		}
		
	}





 ?>