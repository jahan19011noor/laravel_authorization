<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = App\Permission::create([
        	'name' => 'Show Product',
        	'slug' => 'show-product'
        ]);
        
        $permission = App\Permission::create([
        	'name' => 'View All Pages',
        	'slug' => 'view-all-pages'
        ]);
        
        $permission = App\Permission::create([
        	'name' => 'Write Blog',
        	'slug' => 'write-blog'
        ]);
        
        $permission = App\Permission::create([
        	'name' => 'Visitor',
        	'slug' => 'visitor'
        ]);
    }
}
