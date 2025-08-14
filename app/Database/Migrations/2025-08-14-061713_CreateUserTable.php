<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" =>[
               "type" => "INT",
                "constraint" => 10,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
                
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 25,
                "null" => false
            ],
            "created_at datetime default curren_timestamp"
        ]);

        $this->forge->addPrimaryKey("id",true);

        $this->forge->createTable("user");


    }

    public function down()
    {
        $this->forge->dropTable("user");
    }
}
