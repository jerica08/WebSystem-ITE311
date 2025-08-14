<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInstructorTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "instructor_id"=>[
                "type"=> 'INT',
                "constraint"=> 15,
                "unsigned"=> true,
            ],
            "department" => [
                "type"=> "VARCHAR",
                "constraint"=> 100,
            ],
        ]);
        $this->forge->addPrimaryKey("instructor_id",true);
        $this->forge->addForeignKey("instructor_id","user","id", "CASCADE","CASCADE");
        $this->forge->createTable("instructor");
    }

    public function down()
    {
        $this->forge->dropTable("instructor");
    }
}
