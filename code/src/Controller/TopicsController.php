<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Controller/ArticlesController.php

namespace App\Controller;

class TopicsController extends AppController {

	public function initialize(): void
	{
		parent::initialize();

		$this->loadComponent('Paginator');
		$this->loadComponent('Flash'); // Include the FlashComponent
	}



	public function index() {
		$topics = $this->Paginator->paginate($this->Topics->find());
		$this->set(compact('topics'));
	}
	
	
	public function view($slug)
	{
		$topic = $this->Topics->findBySlug($slug)->firstOrFail();
		$this->set(compact('topic'));
	}
	
	public function add()
	{
		$topic = $this->Topics->newEmptyEntity();
		if ($this->request->is('post')) {
		    $topic = $this->Topics->patchEntity($topic, $this->request->getData());

		    // Hardcoding the user_id is temporary, and will be removed later
		    // when we build authentication out.
		    $topic->user_id = 1;

		    if ($this->Topics->save($topic)) {
			$this->Flash->success(__('Seu tópico foi criado.'));
			return $this->redirect(['action' => 'index']);
		    }
		    $this->Flash->error(__('Não foi possível criar seu tópico.'));
		}
		$this->set('topic', $topic);
	}
	
	
	public function edit($slug) {
		$topic = $this->Topics->findBySlug($slug)->firstOrFail();

		if ($this->request->is(['post', 'put'])) {
			$this->Topics->patchEntity($topic, $this->request->getData());
			if ($this->Topics->save($topic)) {
			    $this->Flash->success(__('Seu tópico foi atualizado.'));
			    return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possível atualizar o tópico.'));
		}

		$this->set('topic', $topic);
	}	
	
	public function delete($slug)
	{
		$this->request->allowMethod(['post', 'delete']);

		$topic = $this->Topics->findBySlug($slug)->firstOrFail();
		if ($this->Topics->delete($topic)) {
			$this->Flash->success(__('O {0} tópico foi deletado.', $topic->title));
			return $this->redirect(['action' => 'index']);
		}
	}	

}
