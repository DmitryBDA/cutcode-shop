<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    /**
    * @test
    */
    public function it_main_page_success_status(): void
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
