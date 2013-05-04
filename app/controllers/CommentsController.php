<?php

namespace app\controllers;

use app\models\Projects;

class CommentsController extends \lithium\action\Controller {
	
	public function index() {
		$projects = Projects::all();
		return compact("comments");
	}
	
	public function add(){
		$success = false;

		if($this->request->data) {
			$comment = Comments::create($this->request->data);
			$success = $comment->save();
		}

		return compact("success");
	}

    public function edit($id = null) {

        if($id == null)
        {
            
        }

        $success = false;
        $comment = Comments::find($id);
        if($this->request->data) {
            $comment->title = $this->request->data['title'];
            $comment->description = $this->request->data['description'];
            $success = $comment->save();
            $this->redirect('Projects');
        }
           
        #return array('project' => $project);
    }
	
	public function delete() {
		$success = false;
	}
}

?>