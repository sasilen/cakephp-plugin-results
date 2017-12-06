<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $result->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="results form large-9 medium-8 columns content">
    <?= $this->Form->create($result) ?>
    <fieldset>
        <legend><?= __('Edit Result') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('firstname');
            echo $this->Form->control('surname');
            echo $this->Form->control('club');
            echo $this->Form->control('email');
            echo $this->Form->control('race');
            echo $this->Form->control('league');
            echo $this->Form->control('distance');
            echo $this->Form->control('time', ['empty' => true]);
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('gender');
            echo $this->Form->control('birthdate', ['empty' => true]);
            echo $this->Form->control('agegroup');
            echo $this->Form->control('ranking');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
