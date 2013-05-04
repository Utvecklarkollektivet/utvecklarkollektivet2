<?php

namespace app\extensions\action;

class ACLController extends \lithium\action\Controller {

    protected function _init() {
        parent::_init();
        $controller = $this->request->params["controller"];
        $action = $this->request->params["action"];
        #var_dump($this->request);
    }
}

?>