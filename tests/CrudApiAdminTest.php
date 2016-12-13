<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class CrudApiAdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVisitingAdminRolesAsAnAdminShowsTheCrudApi()
    {
        $user = User::where('email', 'testadmin@example.com')->first();

        $this->actingAs($user)
            ->visit('admin/Role')
            ->see('Roles')
            ->see('Name')
            ->see('Administrator')
            ->see('Actions')
            ->see('Create Role')
            ->see('Edit');
    }
}
