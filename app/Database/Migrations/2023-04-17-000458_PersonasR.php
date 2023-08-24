<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PersonasR extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'personasId' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'personasNombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'personasApellido' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'personasTitulo'=>[
                'type'=>'VARCHAR',
                'constraint'=>'30'
            ],
            'personasUsername'=>[
                'type'=>'VARCHAR',
                'constraint'=>'30'
            ]
        ]);
        $this->forge->addKey('personasId', true);
        $this->forge->createTable('personas');

    }

    public function down()
    {
        //
        $this->forge->dropTable('personas');
    }
}
