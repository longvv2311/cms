<?php

use App\Role;
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
        $data = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'trainer'
            ],
            [
                'name' => 'trainningstaff'
            ],
            [
                'name' => 'student'
            ]      
        ];
        Role::insert($data); // dung` trong mang da chieu
    }
}
