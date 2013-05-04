<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

class WhiteboardsController extends \lithium\action\Controller {

    public function index() {
        return $this->render(array('json' => "Hello World"));
    }


	public function get($id = null) {

        if($id == null)
            return $this->render(array('json' => array('success' => 'false')));

        $board = Whiteboards::find('all', array('conditions' => array('projectid' => $id)));

		return $this->render(array('json' => $board = array(), 'status' => 200));
	}
}

?>