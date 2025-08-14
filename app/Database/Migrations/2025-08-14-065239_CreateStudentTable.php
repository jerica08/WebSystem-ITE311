<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "student_id"=>[
                "type"=> "INT",
                "constraint"=> 15,
                "unsigned"=> true,
            ],
            "enrollment_date" => [
                'type' => "DATE",
                "NULL"=> true,
            ]  
            ]);
        $this->forge->addPrimaryKey("student_id",true);
        $this->forge->addForeignKey("student_id","user","id", "CASCADE","CASCADE");
        $this->forge->createTable("student");
    }

    public function down()
    {
        $this->forge->dropTable("student");
    }
}
