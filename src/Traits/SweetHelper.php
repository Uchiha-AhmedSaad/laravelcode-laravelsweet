<?php 

namespace Laravelcode\LaravelSweet\Traits;

use Laravelcode\LaravelSweet\Classes\SweetAlertHelper;


trait SweetHelper
{
	public function SweetFlash($element,$method,$status = "success",$time = 5000)
	{
		return new SweetAlertHelper($element,$method,$status,$time);
	}
    public function get_trans_file_json()
    {
        $json_trans = __DIR__."/../Trans";
        return $json_trans;
    }
}
