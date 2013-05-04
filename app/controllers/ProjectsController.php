<?php

namespace app\controllers;

use app\models\Projects;
use app\extensions\helper\AuthHelper;

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

    public function edit($id = null) {
        AuthHelper::AuthOrRedirect();
        if($id == null)
        {
            
        }

        $project = Projects::find($id);
        if($this->request->data) {
            $project->title = $this->request->data['title'];
            $project->description = $this->request->data['description'];
            $project->save();
            $this->redirect('Projects');
        }
           
        return array('project' => $project);
    }

    public function view($id = null)
    {
        $project = Projects::find($id);
        return compact('project');
    }
}

?>