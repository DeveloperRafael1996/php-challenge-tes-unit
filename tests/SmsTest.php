<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Contact;


class SmsTest extends TestCase
{
	
	/** @test */
	public function it_send_sms()
	{
        $numero = "925986845";
        $contact = new Contact();

        $this->assertTrue($contact->makeValidatedNumber($numero));
		$this->assertEquals('Enviado',$contact->sendSMS($numero));

		// if($this->assertTrue($contact->makeValidatedNumber($numero) == true))
		// {
		// 	$this->assertEquals('Enviado',$contact->sendSMS($numero));
		// }

	}
}
