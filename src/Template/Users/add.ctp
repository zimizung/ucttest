<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Security Questions'), ['controller' => 'SecurityQuestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Security Question'), ['controller' => 'SecurityQuestions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organisations'), ['controller' => 'Organisations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organisation'), ['controller' => 'Organisations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('security_question_id', ['options' => $securityQuestions, 'empty' => true]);
            echo $this->Form->control('security_question_answer');
            echo $this->Form->control('last_login', ['empty' => true]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('deleted');
            echo $this->Form->control('deleted_date', ['empty' => true]);
            echo $this->Form->control('reset_password_yn');
            echo $this->Form->control('passwordexpired', ['empty' => true]);
            echo $this->Form->control('passwordexpiredyn');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
