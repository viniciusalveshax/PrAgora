<?php

// code inspired by https://book.cakephp.org/4/en/quickstart.html

// src/Model/Table/TopicsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class TopicsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}

