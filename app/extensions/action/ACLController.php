<?php

namespace app\extensions\action;

use app\models\AclPaths;

class ACLController extends \lithium\action\Controller {

    protected function _init() {
        parent::_init();
        $controller = strtolower($this->request->params["controller"]);
        $action = strtolower($this->request->params["action"]);
        $this->path_exist($controller, $action);
        $this->validate_acl($controller, $action);
        #var_dump($this->request);
    }
    
    private function path_exist($controller, $action) {
	    $count = AclPaths::find('count', array(
		    'conditions' => compact('controller', 'action')
		));
		
		if($count === 0) {
			AclPaths::create(compact('controller', 'action'))->save();
		}
    }
    
    private function validate_acl($controller, $action) {
	    $acl = AclPaths::find('first', array(
	    	'args' => compact('controller', 'action'),
	    	'with' => array('Roles')
	    ));
	    
	    var_dump($acl);
    }
}

?>