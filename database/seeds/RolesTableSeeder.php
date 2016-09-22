<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = App\Role::create([
        	'name' => 'Super Admin'
        ]);
        
        $role = App\Role::create([
        	'name' => 'Admin'
        ]);
        
        $role = App\Role::create([
        	'name' => 'Author'
        ]);
        
        $role = App\Role::create([
        	'name' => 'Public'
        ]);
    }
}
