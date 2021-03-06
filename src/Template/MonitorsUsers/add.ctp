<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonitorsUser $monitorsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Monitors'), ['controller' => 'Monitors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Monitor'), ['controller' => 'Monitors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monitorsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($monitorsUser) ?>
    <fieldset>
        <legend><?= __('Add Appointments') ?></legend>
        <?php
            echo $this->Form->control('monitor_id', ['options' => $monitors]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('start_time'); 
            echo $this->Form->control('end_time'); 
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
