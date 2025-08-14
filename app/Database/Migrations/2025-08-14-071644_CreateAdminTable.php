<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "admin_id"=>[
                "type"=> 'INT',
                "constraint"=> 15,
                "unsigned"=> true,
            ],
            "dlast_log_ip" => [
                "type"=> "VARCHAR",
                "constraint"=> 100,
                "null" => true,
            ],
        ]);
         $this->forge->addPrimaryKey("admin_id",true);
        $this->forge->addForeignKey("admin_id","user","id", "CASCADE","CASCADE");
        $this->forge->createTable("admin");
    }
    

    public function down()
    {
        $this->forge=.dropTable("admin");
    }
}
