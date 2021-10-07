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
        <legend><?= __('Palindrome') ?></legend>
        <?php
            echo $this->Form->control('string');

        ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?php 
        $this->Form->end();
        if ($flag==0) {
            echo "<p>".$string."<br>\"is a palindrome\"</p>";
        }else
            echo "<p>".$string."<br>\"is not a palindrome\"</p>";        
     ?>
</div>