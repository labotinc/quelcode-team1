<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentHistory $paymentHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payment Histories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentHistories form large-9 medium-8 columns content">
    <?= $this->Form->create($paymentHistory) ?>
    <fieldset>
        <legend><?= __('Add Payment History') ?></legend>
        <?php
            echo $this->Form->control('schedule_id', ['options' => $schedules]);
            echo $this->Form->control('is_cancelled');
            echo $this->Form->control('settlement_price');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
