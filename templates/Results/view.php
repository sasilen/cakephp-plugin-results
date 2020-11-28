<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="results view content">
            <h3><?= h($result->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($result->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($result->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surname') ?></th>
                    <td><?= h($result->surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Club') ?></th>
                    <td><?= h($result->club) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($result->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Race') ?></th>
                    <td><?= h($result->race) ?></td>
                </tr>
                <tr>
                    <th><?= __('League') ?></th>
                    <td><?= h($result->league) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($result->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= h($result->user_id) ?></td>
                </tr>
                <tr>
                <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($result->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Distance') ?></th>
                    <td><?= $this->Number->format($result->distance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agegroup') ?></th>
                    <td><?= $this->Number->format($result->agegroup) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ranking') ?></th>
                    <td><?= $this->Number->format($result->ranking) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($result->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($result->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthdate') ?></th>
                    <td><?= h($result->birthdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

