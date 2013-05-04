<?php

namespace app\models;

class Whiteboards extends \lithium\data\Model {

    protected $_schema = array(
    'id'  => array('type' => 'id'), // required for Mongo
    'title' => array('type' => 'string', 'default' => 'Moe', 'null' => false),
    'sign' => array('type' => 'string', 'default' => 'bar', 'null' => false),
    'age'  => array('type' => 'integer', 'default' => 0, 'null' => false)
    );
}

?>