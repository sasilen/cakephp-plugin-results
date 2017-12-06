<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="results view large-9 medium-8 columns content">
    <h3><?= h($result->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($result->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($result->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($result->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Club') ?></th>
            <td><?= h($result->club) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($result->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Race') ?></th>
            <td><?= h($result->race) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('League') ?></th>
            <td><?= h($result->league) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($result->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $result->has('user') ? $this->Html->link($result->user->id, ['controller' => 'Users', 'action' => 'view', $result->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($result->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distance') ?></th>
            <td><?= $this->Number->format($result->distance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agegroup') ?></th>
            <td><?= $this->Number->format($result->agegroup) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ranking') ?></th>
            <td><?= $this->Number->format($result->ranking) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($result->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($result->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($result->birthdate) ?></td>
        </tr>
    </table>
</div>
