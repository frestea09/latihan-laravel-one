<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BelajarBladeTemplateTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_belajartempplateblade_index(){
        $this->get('/belajar-blade-template')->assertSeeText('ilman');
    }
    public function test_belajarisset(){
        $this->get('/belajar-blade-template/isset')->assertSeeText('Hello my name is ilman');
    }
    public function test_foreach(){
        $this->get('/belajar-blade-template/isset')->assertSeeText('ilman');
    }
}
