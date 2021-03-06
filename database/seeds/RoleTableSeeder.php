<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        
        $role = new Role();
        $role->name = 'vendedor';
        $role->description = 'Vendedor';
        $role->save();


        $role = new Role();
        $role->name = 'inventario';
        $role->description = 'Inventario';
        $role->save();
    }
}
