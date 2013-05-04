<?php

	namespace app\models;

	class AclPathRoles extends \lithium\data\Model {
		protected $_schema = array(
			'acl_path_id' => array('type' => 'integer', 'null' => false),
		    'role_id'  => array('type' => 'integer', 'null' => false), 
		);
		
		public $belongsTo = array('AclPaths', 'Roles');


	}

?>