<?php

	namespace app\models;

	class Roles extends \lithium\data\Model {
		protected $_schema = array(
		    'id'  => array('type' => 'id'), // required for Mongo
		    'role' => array('type' => 'string', 'null' => false),
		);

		public $hasMany = array("Users", "AclPaths");

	}

?>