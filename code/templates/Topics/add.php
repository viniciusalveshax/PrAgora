<!-- Inspirado por https://book.cakephp.org/4/en/quickstart.html -->

<!-- File: templates/Topics/add.php -->

<h1>Criar tópico</h1>
<?php
    echo $this->Form->create($topic);
    // Hard code the user for now.
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title', ['label'=>'Título (min 10 letras)']);

    echo $this->Form->control('body', ['rows' => '3', 'label'=>'Texto (min 10 letras)']);
    echo $this->Form->button(__('Criar tópico'));
    echo $this->Form->end();
?>
