<?php

use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenants')->insert([
            'name' => 'ABC Learning Management System',
            'domain' => 'abc',
            'url' => 'abc.lms.com'
        ]);
    }
}
