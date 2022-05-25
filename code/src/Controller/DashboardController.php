<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Controller/DashboardController.php

namespace App\Controller;

//use App\Model\Entity\Topic;

class DashboardController extends AppController {


	public function initialize(): void
	{
		parent::initialize();

		$this->loadComponent('Paginator');
		$this->loadComponent('Flash'); // Include the FlashComponent
		$this->loadModel("Topics");

	}


	public function index() {
		$topics = $this->Paginator->paginate($this->Topics->find());
		$this->set(compact('topics'));
	}


}
