<?php

	namespace app\extensions\helper;

	use lithium\security\Auth;
	
	class MenuHelper extends \lithium\template\Helper {

		public function GenerateMenu() {
			if ($user = Auth::check('default')) {
                echo 'Welcome, '.$user['name'].'!';
        	}
            else
            {
                echo "Godamn! Sign up PRIVATE!";
            }
		}

		
	}

?>