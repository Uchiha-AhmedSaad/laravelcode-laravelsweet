<?php 

namespace LaravelSweet\Traits;
use \LaravelSweet\Classes\SweetAlertHelper;


trait SweetHelper
{
	public function SweetFlash($element,$time,$method,$status = "success")
	{
		return new SweetAlertHelper($element,$time,$method,$status);
	}
}