<?php 

namespace Laravelcode\LaravelSweet\Traits;

use \Laravelcode\LaravelSweet\Classes\SweetAlertHelper;


trait SweetHelper
{
	public function SweetFlash($element,$method,$status = "success",$time = 5000)
	{
		return new SweetAlertHelper($element,$time,$method,$status);
	}
}