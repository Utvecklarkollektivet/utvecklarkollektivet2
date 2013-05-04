<?php

namespace app\extensions\action;

use lithium\security\Auth;
use lithium\template\View;
use app\models\AclPaths;
use app\models\AclPathRoles;
use app\models\Roles;
use app\models\Users;
use app\extensions\helper\AuthHelper;


class ACLController extends \lithium\action\Controller {

    protected function _init() {
        parent::_init();
        $controller = strtolower($this->request->params["controller"]);
        $action = strtolower($this->request->params["action"]);
        $this->path_exist($controller, $action);
        $valid = $this->validate_acl($controller, $action);
        
        if(!$valid)
        	parent::render(array("template" => "../ACL/AccessDenied"));

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
	    $acl = AclPaths::find('first',
	    	array("conditions" => compact('controller', 'action'), 
	    	'with' => 'AclPathRoles'
	    ));

	    $acl_id = $acl->id;
	    $roles = array();


	    $joins = AclPathRoles::find('all', array('conditions' => array('acl_path_id' => $acl_id)));
	    foreach($joins as $j) {
	    	$roles[] = $j->role_id;
	    }

	    $user = AuthHelper::currentUser();

	    #echo "ACLID = $acl_id<br>";
	    #echo  "Role =".$user->role_id."<br>";
	    #echo print_r($roles);

	    if(in_array($user->role_id, $roles)){
	    	return true;
	    }
	    else{
	    	return false;
	    }
	    	#$this->render(array("ACL", "AccessDenied")); #array(LITHIUM_APP_PATH . '/views/ACL/AccessDenied.index.php');

    }
}

?>