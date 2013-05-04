<?php

	namespace app\models;

	class Users extends \lithium\data\Model {
		protected $_schema = array(
		    'id'  => array('type' => 'id'), // required for Mongo
		    'email' => array('type' => 'string', 'default' => 'Moe', 'null' => false),
		    'name' => array('type' => 'string', 'null' => false)
		    'password' => array('type' => 'string', 'default' => 'bar', 'null' => false),
		);

	}

?>