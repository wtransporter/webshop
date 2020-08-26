<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // use CreatesApplication;

    public function signIn($user = null)
    {
        $user = $user ?: factory('App\User')->create();
        
        $this->actingAs($user);
        
        return $user;
    }

    public function adminUser()
    {
        return $user = factory(User::class)->create(['head' => 1]);
    }
}
