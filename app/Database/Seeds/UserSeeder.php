<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
       $userData = [
        [
            "username" => "karl",
            "email" => "karl@lms",
            "password" => password_hash ('karl123', PASSWORD_DEFAULT),
            "role" => "student",
        ],
        [
            "username" => "noah",
            "email" => "noah@lms",
            "password" => password_hash ('noah123', PASSWORD_DEFAULT),
            "role" => "instsructor",
        ],
        [
            "username" => "jasper",
            "email" => "jasper@lms",
            "password" => password_hash ('jasper123', PASSWORD_DEFAULT),
            "role" => "admin"
        ],
    ];
    }
}
