<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Select Question Below For an Answer') ?></li>
        <li><?= $this->Html->link(__('Question two'), ['controller' => 'Users','action' => 'questionone']) ?></li>
        <li><?= $this->Html->link(__('Question Four'), ['controller' => 'Users', 'action' => 'questionfour']) ?></li>
        <li><?= $this->Html->link(__('Question Five'), ['controller' => 'Users', 'action' => 'questionfive']) ?></li>
        <li><?= $this->Html->link(__('Question Six'), ['controller' => 'Users', 'action' => 'questionsix']) ?></li>
        <li><?= $this->Html->link(__('Question Seven'), ['controller' => 'Users', 'action' => 'questionseven']) ?></li>
        
    </ul>
</nav>
