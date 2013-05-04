<?php

namespace app\models;

class Projects extends \lithium\data\Model {
	public $hasMany = array('Comments');
}

?>