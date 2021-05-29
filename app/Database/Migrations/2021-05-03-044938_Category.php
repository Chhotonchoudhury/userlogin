<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
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

                        'title' => [
                                'type'       => 'VARCHAR',
                                'constraint' => 100,
                                'null'       => false,
                                      ],
                        'description' => [
                            'type' => 'TEXT',
                            'null' => false,
                                ],
                        'created_at datetime default current_timestamp',
                        'updated_at datetime default current_timestamp on update current_timestamp',
                        'status' => [
                        		'type' =>'TINYINT',
                        	    'constraint' => '1',
                                 ],
                ]);     
                $this->forge->addKey('id', true);
                $this->forge->createTable('category' , true);
	}

	public function down()
	{
		$this->forge->dropTable('category',true);
	}
}
