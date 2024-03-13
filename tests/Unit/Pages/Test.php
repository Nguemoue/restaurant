<?php

namespace Pages;

use Page;
use Tests\TestCase;

class Test extends TestCase
{
	public function test_home_page_can_be_render(){
		$response = $this->get(route("home"));
		$response->assertStatus(200);
	}

	public  function  test_page_contact_can_be_render(){
		$reponse = $this->get(route("contact"));
		$reponse->assertStatus(200);
	}

	public function test_page_team_page_can_be_render(){
		$reponse = $this->get(route("team"));
		$reponse->assertStatus(200);
	}
}
