<?php

class Admin_db extends Base_Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }
    
    public function create_blogs()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'author' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            
            'body' => array(
                'type' => 'VARCHAR',
                'constraint' => 500
            ),
            
            'approved' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0
            )
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('blogs');
    }
    
    public function drop_blogs()
    {
        $this->dbforge->drop_table('blogs');
    }   
}