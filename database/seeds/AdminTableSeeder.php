<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->email = 'somratcste@gmail.com';
        $admin->password = bcrypt('somrat');
        $admin->save();
    }
}
