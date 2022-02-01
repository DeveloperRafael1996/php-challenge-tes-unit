<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Contact;


class ContactTest extends TestCase
{
	
	/** @test */
	public function it_contact_not_found()
	{
		$contact = new Contact();
        $this->assertTrue($contact->makeGetContact('Rafael Guevara'));

	}

}
