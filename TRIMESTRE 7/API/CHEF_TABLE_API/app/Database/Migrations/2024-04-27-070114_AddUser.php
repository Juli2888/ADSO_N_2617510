<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
    public function up()
    {
        $this ->forge->addField([
     'id'=> [
        'type'=> 'BIGINT',
        'contraint' => 255,
        'unsigned'=> true,
        'auto_increment'=> true
     ],
     'email' => [
        'type'=> 'VARCHAR',
        'unique'=>true,
        'contraint' => '255',
    ],
    'password' =>[
        'type' => 'VARCHAR',
        'contraint' => '255',

    ],
    'created_at' =>[
        'type' => 'TIMETAMP',
        'null'=> true
    ],
    'updated_at' => [
        'type'=> 'TIMESTAMP',
        'null' => true
    ],

    
]);
}

    public function down()
    {
        $this->forge->dropTable('users'); //
    }
}
