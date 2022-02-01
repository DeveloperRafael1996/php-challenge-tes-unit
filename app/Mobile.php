<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\ContactService;


class Mobile
{

	public function makeCallByNameNull($name = '')
	{
		if( empty($name) ) return;
	}


	public function makeCallByName($name)
	{
		if( empty($name) ) return;
		else return $name;
	}
}
