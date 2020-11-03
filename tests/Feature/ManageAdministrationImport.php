<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageAdministrationImport extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_users_can_see_administration_import_page()
    {
        $this->adminUser();

        $response = $this->get('/tp-admin/administration');

        $response->assertStatus(302);

    }
    
    /** @test */
    public function unauthenticated_users_cannot_see_administration_import_page()
    {
        $this->signIn();

        $response = $this->get('/tp-admin/administration')->assertRedirect('login');

    }

}