<?php

	namespace app\models;

	class AclPaths extends \lithium\data\Model {
		protected $_schema = array(
		    'id'  => array('type' => 'id'), // required for Mongo
		    'controller' => array('type' => 'string', 'null' => false),
		    'action' => array('type' => 'string', 'null' => false),
		);
		
		public $hasMany = array('Roles');

	}

?>