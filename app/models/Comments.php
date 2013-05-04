<?php

namespace app\models;

class Comments extends \lithium\data\Model {
	public $belongsTo = array('Projects', 'Users');
}

?>