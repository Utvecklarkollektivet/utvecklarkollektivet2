<?php

namespace app\controllers;

use lithium\security\Auth;

class SessionsController extends \lithium\action\Controller {
	
	public function login() {
		
		$login_errors = "";

		if($this->request->data) {
			if(Auth::check('default', $this->request)) {
				return $this->redirect("/");
			}
			else {
				$login_errors .= "Invalid login credantials.";
			}
		}

		return compact('login_errors');
	}

	public function logout() {
		Auth::clear('default');
		return $this->redirect('/');
	}
}

?>