<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Model/Table/TopicsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;



class TopicsTable extends Table
{
	public function initialize(array $config): void
	{
		$this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator): Validator {
		$validator
		->notEmptyString('title')
		->minLength('title', 10)
		->maxLength('title', 255)

		->notEmptyString('body')
		->minLength('body', 10);

		return $validator;
	}
    
}

