<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Controller/ArticlesController.php

namespace App\Controller;

class TopicsController extends AppController {

	public function index() {
		$this->loadComponent('Paginator');
		$topics = $this->Paginator->paginate($this->Topics->find());
		$this->set(compact('topics'));
	}

}
