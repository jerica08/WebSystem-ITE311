<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userData = [[
            'name' => 'jason',
            'email' => 'jason@lms',
            'pasSword' =>  password_hash('jason123', PASSWORD_DEFAULT),
            'role' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'karl',
            'email' => 'karl@lms',
            'pasSword' =>  password_hash('karl123', PASSWORD_DEFAULT),
            'role' => 'instructor',
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'kendra',
            'email' => 'kendra@lms',
            'pasSword' =>  password_hash('kendra123', PASSWORD_DEFAULT),
            'role' => 'student',
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ]
        ];
    }
}
