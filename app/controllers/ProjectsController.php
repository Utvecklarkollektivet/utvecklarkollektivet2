<?php

namespace app\controllers;

use app\models\Projects;

class ProjectsController extends \lithium\action\Controller {
	
	public function index() {
		$projects = Projects::all();
		return compact("projects");
	}

	public function add(){
		$success = false;

		if($this->request->data) {
			$project = Projects::create($this->request->data);
			$success = $project->save();
		}

		return compact("success");
	}
}

?>