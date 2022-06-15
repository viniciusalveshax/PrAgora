<!-- Code from https://book.cakephp.org/authentication/2/en/index.html
 in templates/Users/login.php -->
<div class="users form content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Por favor entre seu login e senha') ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
