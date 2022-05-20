<!-- Inspirado por https://book.cakephp.org/4/en/quickstart.html -->

<!-- File: templates/Topics/edit.php -->

<h1>Editar Tópico</h1>
<?php
    echo $this->Form->create($topic);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Salvar tópico'));
    echo $this->Form->end();
?>
