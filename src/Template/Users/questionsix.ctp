<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Go Back') ?></li>
        <li><?= $this->Html->link(__('back<<'), ['controller' => 'Pages','action' => 'home']) ?></li>
    </ul>
</nav>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create('User') ?>
    <fieldset>
        <legend><?= __('Sort Array') ?></legend>

    <?php 
        $this->Form->end();
        foreach ($output as $key => $value) {
            echo "<br>".$value;
        }
        
     ?>
</div>