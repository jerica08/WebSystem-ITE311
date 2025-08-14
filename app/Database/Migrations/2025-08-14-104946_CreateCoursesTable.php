<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursesTable extends Migration
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
            "title" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
                
            ],
            "description" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "instructor_id" => [
                "type" => "VARCHAR",
                "constraint" => 25,
                "null" => false
            ],
            "created_at" => [
                "type" => "DATETIME",
                "null" => true,
            ],
            "update_at" => [                
                "type" => "DATETIME",
                "null" => true,
            ]
        ]);

        $this->forge->addKey("id",true);
        $this->forge->addForeignKey("instructtor_id", "users","id","CASCADE", "CASCADE");
        $this->forge->createTable("courses");
    }

    public function down()
    {
        $this->forge->dropTable("courses");
    }
}
