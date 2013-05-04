<?php

	namespace app\extensions\helper;

	use lithium\security\Auth;
	
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

		
	}

?>