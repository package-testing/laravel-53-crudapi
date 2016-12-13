<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NonAdminCrudApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVisitingRolesAsNonAdminRedirectsHome()
    {
        $this->visit('/admin/Role')
             ->see('Laravel');
    }
}
