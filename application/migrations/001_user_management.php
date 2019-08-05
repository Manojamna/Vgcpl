<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_user_management extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 11

            ),
            'operation_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'is_deleted' => array(
                'type' => 'boolean',
            ),
            'created_by' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'created_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_by' => array(
                'type' => 'INT',
                'constraint' => 11

            ),

            'updated_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('role_operation');


        //Add operation

        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'text',

            ),
            'url' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'is_deleted' => array(
                'type' => 'boolean',
            ),
            'created_by' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'created_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_by' => array(
                'type' => 'INT',
                'constraint' => 11

            ),
            'updated_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('operation');

        //user_role
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11

            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'is_deleted' => array(
                'type' => 'boolean',
            ),
            'created_by' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'created_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_by' => array(
                'type' => 'INT',
                'constraint' => 11

            ),
            'updated_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_role');

        // user
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'name' => array(
                'type' => 'text',
            ),

            'mobile' => array(
                'type' => 'text',
            ),

            'email' => array(
                'type' => 'text',
                'null'=>TRUE,
            ),

            'profile_image' => array(
                'type' => 'text',
                'null'=>TRUE,
            ),

            'password' => array(
                'type' => 'text',
            ),

            'order_index' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),

            'is_deleted' => array(
                'type' => 'boolean',
            ),

            'created_by' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'created_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_by' => array(
                'type' => 'INT',
                'constraint' => 11

            ),
            'updated_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user');

        //Role
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'name' => array(
                'type' => 'text',
            ),

            'order_index' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),

            'is_deleted' => array(
                'type' => 'boolean',
            ),

            'created_by' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'created_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_by' => array(
                'type' => 'INT',
                'constraint' => 11

            ),
            'updated_at DATETIME  NULL DEFAULT CURRENT_TIMESTAMP',

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('role');

    }

    public function down()
    {
        $this->dbforge->drop_table('role_operation');
        $this->dbforge->drop_table('operation');
        $this->dbforge->drop_table('user_role');
        $this->dbforge->drop_table('user');
        $this->dbforge->drop_table('role');
    }
}