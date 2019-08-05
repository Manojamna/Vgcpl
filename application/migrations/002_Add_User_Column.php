<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_User_Column extends CI_Migration {

    public function up()
    {
        $fields = array(
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'after' => 'email'
            ),
            'bio_info' => array(
                'type' => 'VARCHAR',
                'constraint' => 500,
                'after' => 'gender'
            ),
            'date_of_birth'=>array(
                'type'=>'DATE',
                'after'=>'bio_info'
            )

        );
        $this->dbforge->add_column('user', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('user', 'gender');
        $this->dbforge->drop_column('user', 'bio_info');
        $this->dbforge->drop_column('user', 'date_of_births');
    }
}