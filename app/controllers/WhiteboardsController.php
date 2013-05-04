<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

class WhiteboardsController extends \lithium\action\Controller {

	public function get($projectId = null) {

        if($projectId == null)
            return $this->render(array('error' => 'true'));


		return $this->render(array('json' => 'Hello World'));
	}
}

?>