<?php

namespace App;
use App\Services\ContactService;


class Contact
{
	public function makeGetContact($contact)
	{
		if($contact == 'Rafael Guevara')
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function makeValidatedNumber($number)
	{
		$validate = ContactService::validateNumber($number);
		return $validate;
	}

	public function sendSMS($number)
	{
		if($number == '925986845')
		{
			return 'Enviado';
		}
		else
		{
			return 'No Enviado';
		}
	}	
}