<?php

namespace app\models;

class Projects extends \lithium\data\Model {
	
	protected $_schema = array(
    	'id'  => array('type' => 'id'), // required for Mongo
	    'title' => array('type' => 'string', 'null' => false),
	    'description' => array('type' => 'string', 'null' => false),
	    'user_id' => array('type' => 'int', 'null' => false),
	    'permission_owner' => array('type' => 'int', 'default' => 7, 'null' => false),
	    'permission_group' => array('type' => 'int', 'default' => 5, 'null' => false),
	    'permission_world' => array('type' => 'int', 'default' => 0, 'null' => false),
	);


}

?>