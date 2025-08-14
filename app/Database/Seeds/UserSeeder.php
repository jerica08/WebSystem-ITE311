<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $usersData =[
            [
            "username" => "ethel",
            "email" => "ethel@lms.com",
            "password" => password_hash("ethel123", PASSWORD_DEFAULT),
            "role" => "admin",
            ],
            [
            "username" => "jim",
            "email" => "jim@lms.com",
            "password" => password_hash("jim123", PASSWORD_DEFAULT),
            "role" => "instructor",
            ],
            [
              "username" => "jerica",
            "email" => "jerica@lms.com",
            "password" => password_hash("jerica123", PASSWORD_DEFAULT),
            "role" => "student",   
            ]
         ];                                 
    }
}
     