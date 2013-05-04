<?php

	namespace app\controllers;

	use lithium\security\Auth;
	use lithium\security\Password;
	use app\models\Users;


	class UsersController extends \lithium\action\Controller {
		
		public function index() {
			$users = Users::all();
			return compact("users");
		}

		public function show($id = null) {
			$id = $id ? : $this->request->id;
			$user = Users::find("first", array('conditions' => compact("id")));
			return compact("user");
		}

		public function add() {

			$user = Users::create($this->request->data);
			$user->password = Password::hash($user->password);

	        if (($this->request->data) && $user->save()) {
	            return $this->redirect('Users::index');
	        }
	        return compact('user');

		}

		public function delete($id = null) {
			$id = $id ? : $this->request->id;
			
			if (!isset($id)) {
				$this->redirect('/users');
    		}

    		$user = Users::find('first', array('conditions' => compact('id')));

    		$user->delete();
    		$this->redirect('/users');

		}
	}

?>