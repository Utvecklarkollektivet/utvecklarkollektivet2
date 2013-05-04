<?php

	namespace app\extensions\helper;

	use lithium\security\Auth;
	use app\models\Users;
	use app\models\Roles;
	
	class AuthHelper extends \lithium\template\Helper {

		public function AuthOrRedirect() {
			if (!Auth::check('default')) {
            	return $this->redirect('Sessions::login');
        	}
		}
		
		public function isAuthed() {
			if(Auth::check('default')) {
				return true;
			}
			else {
				return false;
			}
		}

		public static function currentUser() {		
		    $user = Auth::check("default");
		    $user = Users::first(array("conditions" => array("id" => $user['id'])));
		    return $user;
		}
		
	}

?>