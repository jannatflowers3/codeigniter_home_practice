<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JannatMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
               
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '120',
            ],
            

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Jannats');
    }

    public function down()
    {
        $this->forge->dropTable('Jannats');
    }
}
