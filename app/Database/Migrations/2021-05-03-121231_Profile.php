<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
	public function up()
	{
		$this->forge->addField([
                        'id' => [
                                'type'           => 'INT',
                                'constraint'     => 9,
                                'unsigned'       => true,
                                'auto_increment' => true,
                            ],

                        'user_id' => [
                                'type'       => 'INT',
                                'constraint' => 9,
                                'null'       => false,
                                      ],
                        'name' =>[
                                'type' => 'VARCHAR',
                                'constraint' => 100,
                                'null'  => true,
                        ],
                        'address' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'city' =>[
                                'type' => 'VARCHAR',
                                'constraint' => 50,
                                'null'  => true,
                        ],
                        'state' =>[
                                'type' => 'VARCHAR',
                                'constraint' => 50,
                                'null'  => true,
                        ],
                        'country' =>[
                                'type' => 'VARCHAR',
                                'constraint' => 50,
                                'null'  => true,
                        ],
                       'created_at datetime default current_timestamp',
                        'updated_at datetime default current_timestamp on update current_timestamp',
                        'status' => [
                        		'type' =>'TINYINT',
                        	    'constraint' => '1',
                                 ],
                ]);     
                $this->forge->addKey('id', true);
                $this->forge->createTable('profile' , true);
	}

	public function down()
	{
		$this->forge->dropTable('profile',true);
	}
}
