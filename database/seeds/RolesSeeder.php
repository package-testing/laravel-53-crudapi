<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Administrator'
        ];

        foreach ($roles as $r) {
            Role::create(['name' => $r]);
        }
    }
}
