<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Model/Entity/Topic.php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;
use Cake\Event\EventInterface;

class Topic extends Entity
{
	protected $_accessible = [
		'*' => true,
		'id' => false,
		'slug' => false,
	];
    
    
	public function beforeSave(EventInterface $event, $entity, $options) {
		if ($entity->isNew() && !$entity->slug) {
			$sluggedTitle = Text::slug($entity->title);
			// trim slug to maximum length defined in schema
			$entity->slug = substr($sluggedTitle, 0, 191);
		}
	}
}

