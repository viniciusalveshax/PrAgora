<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Model/Entity/Topic.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Topic extends Entity
{
	protected $_accessible = [
		'*' => true,
		'id' => false,
		'slug' => false,
	];
    

}

