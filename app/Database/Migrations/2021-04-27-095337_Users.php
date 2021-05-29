<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
//use CodeIgniter\I18n\Time;

class Users extends Migration
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

                        'username' => [
                                'type'       => 'VARCHAR',
                                'constraint' => 50,
                                'null'       => false,
                                      ],
                        'email'  =>[
                        	'type' => 'VARCHAR',
                            'constraint' =>50,
                            'null'   =>false,
                                   ],
                        'password' => [
                                'type' => 'TEXT',
                                'null' => true,
                                      ],
                        'created_at datetime default current_timestamp',
                        'updated_at datetime default current_timestamp on update current_timestamp',
                        'status' => [
                        		'type' =>'TINYINT',
                        	    'constraint' => '1',
                                 ],
                       
                ]);     
                $this->forge->addKey('id', true);
                $this->forge->createTable('users' , true);
	}

	public function down()
	{
		$this->forge->dropTable('users',true);
	}
}
