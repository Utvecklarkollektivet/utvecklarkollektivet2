<?php

	namespace app\extensions\helper;

	use lithium\security\Auth;
	
	class MenuHelper extends \lithium\template\Helper {

		public function GenerateMenu() {
            $menu = "";
			if ($user = Auth::check('default')) {
                $menu .= '<li class="divider"></li>';
                $menu .= '<li><a href="/projects">Project</a></li>';
                $menu .= '<li class="divider"></li>';
                $menu .= '<li><a href="#">Menu item</a></li>';
                $menu .= '<li class="divider"></li>';
                $menu .= '<li class="has-form">
                    <a href="#" class="button">'.$user['name'].'</a>
                </li>';
                $menu .= '<li><a href="/logout">Logga ut</a></li>';

        	}
            else
            {
                $menu .= '<li class="divider"></li>';
                $menu .= '<li><a href="#">Main Item 1</a></li>';
                $menu .= '<li class="divider"></li>';
                $menu .= '<li><a href="#">Main Item 2</a></li>';
                $menu .= '<li class="divider"></li>';
                $menu .= '<li class="has-form">
                    <a href="/login" class="button">Logga in</a>
                </li>';
            }

            return $menu;
		}

		
	}

?>