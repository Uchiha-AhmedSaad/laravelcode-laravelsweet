<?php 
	if (!function_exists('Sweet_Session_fired')) {
		function Sweet_Session_fired()
		{
			return session()->forget(['Flash_message','title','icon','timer','text']);
		}
	}





 ?>