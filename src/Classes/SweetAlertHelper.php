<?php 

namespace Laravelcode\LaravelSweet\Classes;


class SweetAlertHelper
{
	private $status;
	private $element;
	private $method;
	private $timer;


	public function __construct($element,$method,$status = "success",$timer = 500)
	{
		$this->element 	= $element;
		$this->timer 	= $timer;
		$this->method 	= $method;
		$this->status 	= $status;
		return $this->FlashMessage();
	}
	public function FlashMessage()
	{
		Session([
		'Flash_message' => $this->Router()['status'],
		'title' 		=> $this->Router()['title'],
		'timer' 		=> $this->Router()['timer'],
		'text' 			=> $this->Router()['text']]);
	}
	public function Router()
	{
		if     ($this->status == 'success') {return $this->Success();}
		elseif ($this->status == 'error'  ) {return $this->Error();  }
		elseif ($this->status == 'warning') {return $this->Warning();}
		elseif ($this->status == 'info'   ) {return $this->Info();   }
	}
	public function Success()
	{
		return [
			'status'	=> 'success',
			'title'		=> 'Successful',
			'timer'		=> $this->timer,
			'text'		=> "{$this->element} Successfully {$this->method}"
		];
	}
	public function Error()
	{
		return [
			'status'	=> 'error',
			'title'		=> 'error',
			'timer'		=> $this->timer,
			'text'		=> "{$this->element}  Unsuccessfully {$this->method}"
		];
	}
	public function Warning()
	{
		return [
			'status'	=> 'warning',
			'title'		=> 'Attention',
			'timer'		=> $this->timer,
			'text'		=> "{$this->element} {$this->method}"
		];
	}
	public function Info()
	{
		return [
			'status'	=> 'info',
			'title'		=> 'Important',
			'timer'		=> $this->timer,
			'text'		=> "{$this->element} {$this->method}"
		];
	}	
}