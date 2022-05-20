<?php
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

