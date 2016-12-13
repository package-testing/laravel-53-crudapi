<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class ModelWithoutPolicyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::where('email', 'testadmin@example.com')->first();

        $this->actingAs($user)
            ->visit('admin/Organisation')
            ->see('Laravel');
    }
}
